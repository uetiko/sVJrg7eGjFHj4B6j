<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Application;

use GuzzleHttp\Client;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Interfaces\TransferRepository;
use Uetiko\Prueba\Backend\PagoFacil\Application\TransactionFinder;

class TransactionVerify
{
    /** @var Client $client */
    private $client;
    /** @var TransferRepository $transferRepository */
    private $transferRepository;
    /** @var TransactionFinder $finder */
    private $finder;

    /**
     * TransactionVerify constructor.
     * @param Client $client
     * @param TransferRepository $transferRepository
     * @param \Uetiko\Prueba\Backend\PagoFacil\Application\TransactionFinder $finder
     */
    public function __construct(
        Client $client, TransferRepository $transferRepository,
        \Uetiko\Prueba\Backend\PagoFacil\Application\TransactionFinder $finder
    )
    {
        $this->client = $client;
        $this->transferRepository = $transferRepository;
        $this->finder = $finder;
    }

}
