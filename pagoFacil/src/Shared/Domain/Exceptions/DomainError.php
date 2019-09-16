<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Shared\Domain\Exceptions;

use \DomainException;
use Throwable;

abstract class DomainError extends DomainException
{
    protected function __construct(
        $message = "", $code = 0, Throwable $previous = null
    )
    {
        parent::__construct($message, $code, $previous);
    }
}
