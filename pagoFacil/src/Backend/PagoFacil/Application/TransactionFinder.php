<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Application;

use Uetiko\Prueba\Backend\PagoFacil\Domain\Interfaces\TransferRepository;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Method;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer;
use Uetiko\Prueba\Backend\PagoFacil\Domain\TransferId;
use Uetiko\Prueba\Backend\PagoFacil\Infrastructure\MethodRepository;

class TransactionFinder
{
    /** @var TransferRepository */
    private $transferRepository;
    /** @var MethodRepository $methodRepository */
    private $methodRepository;

    /**
     * TransactionFinder constructor.
     * @param TransferRepository $transferRepository
     * @param MethodRepository $methodRepository
     */
    public function __construct(
        TransferRepository $transferRepository,
        MethodRepository $methodRepository
    )
    {
        $this->transferRepository = $transferRepository;
        $this->methodRepository = $methodRepository;
    }

    /**
     * @param TransferId $id
     * @return Transfer
     */
    public function search(TransferId $id): Transfer
    {
        return $this->transferRepository->findById($id);
    }

    public function searchMethod(string $name): Method
    {
        return $this->methodRepository->findByName($name);
    }
}
