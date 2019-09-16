<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Country\Domain\Exceptions;

use Uetiko\Prueba\Shared\Domain\Exceptions\DomainError;

class CountryException extends DomainError
{
    /**
     * @return CountryException
     */
    static public function NotExist(): self
    {
        return new static("Country not exist");
    }

    /**
     * @return CountryException
     */
    static public function UpdateFail(): self
    {
        return new static('Can\'t save the data');
    }

    /**
     * @return CountryException
     */
    static public function EraseFail(): self
    {
        return new static('can\'t erase the record.');
    }
}
