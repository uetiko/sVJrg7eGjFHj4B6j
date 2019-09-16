<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Company\Domain\Exceptions;

use Uetiko\Prueba\Shared\Domain\Exceptions\DomainError;

class CompanyException extends DomainError
{
    /**
     * @return CompanyException
     */
    static public function NotExist(): self
    {
        return new static("Company not exist");
    }

    /**
     * @return CompanyException
     */
    static public function UpdateFail(): self
    {
        return new static('Can\'t save the data');
    }

    /**
     * @return CompanyException
     */
    static public function EraseFail(): self
    {
        return new static('can\'t erase the record.');
    }

}
