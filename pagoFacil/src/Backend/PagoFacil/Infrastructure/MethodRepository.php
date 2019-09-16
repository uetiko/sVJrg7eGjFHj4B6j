<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Infrastructure;

use Uetiko\Prueba\Backend\PagoFacil\Domain\Exceptions\PagoFacilException;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Interfaces\MethodRepository as
    Repository;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Method;

class MethodRepository implements Repository
{

    /**
     * @param Method $method
     * @throws PagoFacilException
     */
    public function save(Method $method): void
    {
        // TODO: Implement save() method.
    }

    /**
     * @param Method $method
     * @throws PagoFacilException
     */
    public function update(Method $method): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @param string $name
     * @return Method
     * @throws PagoFacilException
     */
    public function findByName(string $name): Method
    {
        // TODO: Implement findByName() method.
    }
}
