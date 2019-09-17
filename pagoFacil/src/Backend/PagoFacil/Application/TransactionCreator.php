<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Application;

use DateTime;
use ArrayObject;
use Illuminate\Support\Facades\Config;
use phpDocumentor\Reflection\Types\This;
use Psr\Http\Message\ResponseInterface;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Error;
use Uetiko\Prueba\Backend\PagoFacil\Domain\ErrorId;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Exceptions\PagoFacilException;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Interfaces\TransferRepository;
use GuzzleHttp\Client;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer;
use Uetiko\Prueba\Backend\PagoFacil\Domain\TransferId;
use Uetiko\Prueba\Backend\User\Domain\User;
use Uetiko\Prueba\Backend\User\Domain\UserId;

class TransactionCreator
{
    /** @var Client $client */
    private $client;
    /** @var TransferRepository $transferRepository */
    private $transferRepository;
    /** @var TransactionFinder $finder */
    private $finder;
    /** @var ResponseInterface $response */
    private $response;
    /** @var array $decode */
    private $decode;
    /** @var ArrayObject */
    private $data;

    /**
     * TransactionCreator constructor.
     * @param Client $client
     * @param TransferRepository $transferRepository
     * @param TransactionFinder $finder
     */
    public function __construct(
        Client $client, TransferRepository $transferRepository,
        TransactionFinder $finder
    )
    {
        $this->client = $client;
        $this->transferRepository = $transferRepository;
        $this->finder = $finder;
        $this->data = new ArrayObject([
            'autorizado' => 0,
            'autorizacion' => 0,
            'transaccion' => '',
            'texto' => '',
            'error' => '',
            'empresa' => '',
            'transIni' => '',
            'transFin' => '',
            'data' => [],
            'dataVal' => [],
            'pf_message' => '',
            'status' => '',
        ]);
    }
    private function setData(array $response): void
    {
        $this->data->offsetSet('autorizado', $response['autorizado']);
        $this->data->offsetSet('transaccion', $response['transaccion']);
        $this->data->offsetSet('texto', $response['texto']);
        $this->data->offsetSet('mode', $response['mode']);
        $this->data->offsetSet(
            'idTransaccion', $response['idTransaccion']
        );
        $this->data->offsetSet(
            'tipoTarjetaBancaria', $response['tipoTarjetaBancaria']
        );
        $this->data->offsetSet('empresa', $response['empresa']);
        $this->data->offsetSet(
            'transIni',
            $this->setDateTimeFormat($response['transIni'])
        );
        $this->data->offsetSet(
            'transFin',
            $this->setDateTimeFormat($response['transFin'])
        );
        $this->data->offsetSet('pf_message', $response['pf_message']);
        $this->data->offsetSet('status', $response['status']);

    }

    public function transaction(array $params, UserId $userId):void
    {
        $this->response = $this->client->post(Config::get(
            'pagoFacil.ws.options.uri'
        ), $params);

        $this->validate();

        $this->save($this->generateTransactionModel());
    }

    protected function createFailError(PagoFacilException $exception): Error
    {
        return new Error(new ErrorId(ErrorId::generateUuid()->getValue()),
            $exception->getMessage());
    }

    /**
     * @param string $date
     * @return DateTime
     * @throws \Exception
     */
    protected function setDateTimeFormat(string $date): DateTime
    {
        $date = str_replace('pm', '', $date);
        $date = str_replace('\/', '-', $date);

        return new DateTime($date);
    }

    public function generateTransactionModel(): Transfer
    {
        return new Transfer(
            new TransferId(TransferId::generateUuid()->getValue()),
            $this->finder->searchMethod('transaccion'),
            $this->data->offsetGet('autorizacion'),
            $this->data->offsetGet('autorizado'),
            $this->data->offsetGet('texto'),
            $this->data->offsetGet('idTransaccion'),
            $this->data->offsetGet('transIni'),
            $this->data->offsetGet('transFin'),
            $this->data->offsetGet('error')
        );
    }

    public function save(Transfer $transfer, UserId $userId): void
    {
        $this->transferRepository->save($transfer, $userId);
    }


    /**
     * @throws PagoFacilException
     */
    private function validate(): void
    {
        $decode = \GuzzleHttp\json_decode($this->response->getBody(), true);
        $this->decode = $decode['WebServices_Transacciones'];

        $this->setData($this->decode);

        if(false === strpos((string)$this->response->getBody(), 'error')){
            $this->data->offsetSet(
                'error',
                $this->decode['error']
            );
            throw PagoFacilException::TransactionError(
                $this->decode['error'], $this->response->getStatusCode()
            );
        }

        $this->data->offsetSet(
            'autorizacion', $this->decode['autorizacion']
        );
    }
}
