<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Domain\Interfaces;

use Uetiko\Prueba\Backend\PagoFacil\Domain\Exceptions\PagoFacilException;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Method;

interface MethodRepository
{
    const TABLE = 'cat_pago_facil_methods';

    /**
     * @param Method $method
     * @throws PagoFacilException
     */
    public function save(Method $method):void;

    /**
     * @param Method $method
     * @throws PagoFacilException
     */
    public function update(Method $method): void;

    /**
     * @param string $name
     * @return Method
     * @throws PagoFacilException
     */
    public function findByName(string $name): Method;
}
