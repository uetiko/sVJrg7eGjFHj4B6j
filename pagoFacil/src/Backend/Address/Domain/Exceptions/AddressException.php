<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Address\Domain\Exceptions;

use Uetiko\Prueba\Shared\Domain\Exceptions\DomainError;

class AddressException extends DomainError
{
    /**
     * @return AddressException
     */
    static public function NotExist(): self
    {
        return new static("Address not exist");
    }

    /**
     * @return AddressException
     */
    static public function UpdateFail(): self
    {
        return new static('Can\'t save the data');
    }

    /**
     * @return AddressException
     */
    static public function EraseFail(): self
    {
        return new static('can\'t erase the record.');
    }
}
