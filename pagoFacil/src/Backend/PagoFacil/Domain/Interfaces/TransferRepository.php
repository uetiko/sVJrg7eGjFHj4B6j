<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Domain\Interfaces;

use Uetiko\Prueba\Backend\PagoFacil\Domain\ErrorId;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Exceptions\PagoFacilException;
use Uetiko\Prueba\Backend\PagoFacil\Domain\MethodId;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer;
use Uetiko\Prueba\Backend\PagoFacil\Domain\TransferId;

interface TransferRepository
{
    const TABLE = 'transfer';

    /**
     * @param Transfer $transfer
     * @throws PagoFacilException
     */
    public function save(Transfer $transfer):void;

    /**
     * @param Transfer $transfer
     * @throws PagoFacilException
     */
    public function update(Transfer $transfer):void;

    /**
     * @param TransferId $id
     * @throws PagoFacilException
     */
    public function delete(TransferId $id): void;

    /**
     * @param TransferId $id
     * @return Transfer
     * @throws PagoFacilException
     */
    public function findById(TransferId $id): Transfer;

    /**
     * @param MethodId $id
     * @return Transfer
     * @throws PagoFacilException
     */
    public function findByMethodId(MethodId $id): Transfer;

    /**
     * @param string $method
     * @return Transfer
     * @throws PagoFacilException
     */
    public function findByMethod(string $method): Transfer;

    /**
     * @param ErrorId $id
     * @return Transfer
     * @throws PagoFacilException
     */
    public function findByError(ErrorId $id): Transfer;
}
