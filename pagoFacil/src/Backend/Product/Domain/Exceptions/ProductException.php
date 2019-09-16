<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Product\Domain\Exceptions;

use Uetiko\Prueba\Shared\Domain\Exceptions\DomainError;

class ProductException extends DomainError
{
    /**
     * @return ProductException
     */
    static public function NotExist(): self
    {
        return new static("Product not exist");
    }

    /**
     * @return ProductException
     */
    static public function UpdateFail(): self
    {
        return new static('Can\'t save the data');
    }

    /**
     * @return ProductException
     */
    static public function EraseFail(): self
    {
        return new static('can\'t erase the record.');
    }
}
