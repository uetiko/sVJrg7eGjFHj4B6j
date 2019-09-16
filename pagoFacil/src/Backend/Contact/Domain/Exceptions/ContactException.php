<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Contact\Domain\Exceptions;

use Uetiko\Prueba\Shared\Domain\Exceptions\DomainError;

class ContactException extends DomainError
{
    /**
     * @return ContactException
     */
    static public function NotExist(): self
    {
        return new static("Contact not exist");
    }

    /**
     * @return ContactException
     */
    static public function UpdateFail(): self
    {
        return new static('Can\'t save the data');
    }

    /**
     * @return ContactException
     */
    static public function EraseFail(): self
    {
        return new static('can\'t erase the record.');
    }
}
