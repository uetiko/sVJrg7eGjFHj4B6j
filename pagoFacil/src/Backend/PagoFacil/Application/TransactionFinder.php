<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Application;

use Uetiko\Prueba\Backend\PagoFacil\Domain\Interfaces\TransferRepository;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer;
use Uetiko\Prueba\Backend\PagoFacil\Domain\TransferId;

class TransactionFinder
{
    /** @var TransferRepository */
    private $transferRepository;

    /**
     * TransactionFinder constructor.
     * @param TransferRepository $transferRepository
     */
    public function __construct(TransferRepository $transferRepository)
    {
        $this->transferRepository = $transferRepository;
    }

    /**
     * @param TransferId $id
     * @return Transfer
     */
    public function search(TransferId $id): Transfer
    {
        return $this->transferRepository->findById($id);
    }
}
