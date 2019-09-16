<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Domain\Exceptions;

use Uetiko\Prueba\Shared\Domain\Exceptions\DomainError;

class PagoFacilException extends DomainError
{
    /**
     * @return PagoFacilException
     */
    static public function TransactionNotExist(): self
    {
        return new static("Transaction not exist");
    }

    /**
     * @return PagoFacilException
     */
    static public function UpdateFail(): self
    {
        return new static('Can\'t save the data');
    }

    /**
     * @return PagoFacilException
     */
    static public function EraseFail(): self
    {
        return new static('can\'t erase the record.');
    }

    static public function MethodNotExist(): self
    {
        return new static('Method not exist');
    }
}
