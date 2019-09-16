<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\User\Domain\Exceptions;

use Uetiko\Prueba\Backend\User\Domain\User;
use Uetiko\Prueba\Shared\Domain\Exceptions\DomainError;

/**
 * Class CreditCardException
 * @package Uetiko\Prueba\Backend\CreditCard\Domain\Exceptions
 */
class UserException extends DomainError
{
    /**
     * @return UserException
     */
    static public function NotExist(): UserException
    {
        return new static("User not exist");
    }

    /**
     * @return UserException
     */
    static public function UpdateFail(): UserException
    {
        return new static('Can\'t save the data');
    }

    /**
     * @return UserException
     */
    static public function EraseFail(): UserException
    {
        return new static('can\'t erase the record.');
    }
}
