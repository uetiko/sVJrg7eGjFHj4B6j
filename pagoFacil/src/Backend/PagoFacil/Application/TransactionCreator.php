<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Application;

use Uetiko\Prueba\Backend\PagoFacil\Domain\Interfaces\TransferRepository;
use GuzzleHttp\Client;

class TransactionCreator
{
    /** @var Client $client */
    private $client;
    /** @var TransferRepository $transferRepository */
    private $transferRepository;
    /** @var TransactionFinder $finder */
    private $finder;

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
    }


}
