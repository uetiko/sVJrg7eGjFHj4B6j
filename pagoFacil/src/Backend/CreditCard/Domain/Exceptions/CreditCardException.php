<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\CreditCard\Domain\Exceptions;

use Uetiko\Prueba\Shared\Domain\Exceptions\DomainError;

/**
 * Class CreditCardException
 * @package Uetiko\Prueba\Backend\CreditCard\Domain\Exceptions
 */
class CreditCardException extends DomainError
{
    /**
     * @return CreditCardException
     */
    static public function NotExist(): CreditCardException
    {
        return new static("Credit card not exist");
    }

    static public function NotExistTypeCard(): CreditCardException
    {
        return new static('type of credit card not exist');
    }

    /**
     * @return CreditCardException
     */
    static public function UpdateFail(): CreditCardException
    {
        return new static('Can\'t save the data');
    }

    /**
     * @return CreditCardException
     */
    static public function EraseFail(): CreditCardException
    {
        return new static('can\'t erase the record.');
    }
}
