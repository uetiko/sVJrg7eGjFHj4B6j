<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Order\Domain\Exception;

use Uetiko\Prueba\Shared\Domain\Exceptions\DomainError;

class OrderException extends DomainError
{

    /**
     * @return OrderException
     */
    static public function NotExist(): self
    {
        return new static("Order not exist");
    }

    /**
     * @return OrderException
     */
    static public function UpdateFail(): self
    {
        return new static('Can\'t save the data');
    }

    /**
     * @return OrderException
     */
    static public function EraseFail(): self
    {
        return new static('can\'t erase the record.');
    }
}
