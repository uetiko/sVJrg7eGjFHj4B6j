<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Payment\Domain\Exceptons;

use Uetiko\Prueba\Shared\Domain\Exceptions\DomainError;

class PaymentException extends DomainError
{
    /**
     * @return PaymentException
     */
    static public function NotExist(): self
    {
        return new static("Payment not exist");
    }

    /**
     * @return PaymentException
     */
    static public function UpdateFail(): self
    {
        return new static('Can\'t save the data');
    }

    /**
     * @return PaymentException
     */
    static public function EraseFail(): self
    {
        return new static('can\'t erase the record.');
    }
}
