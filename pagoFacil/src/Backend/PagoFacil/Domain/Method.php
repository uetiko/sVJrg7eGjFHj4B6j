<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Domain;

use Uetiko\Prueba\Backend\PagoFacil\Domain\MethodId;

class Method
{
    /** @var MethodId $id */
    private $id;
    /** @var string $name */
    private $name;
    /** @var string $descrive */
    private $descrive;
}
