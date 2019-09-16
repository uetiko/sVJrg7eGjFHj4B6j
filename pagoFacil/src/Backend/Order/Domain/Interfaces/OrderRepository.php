<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Order\Domain\Interfaces;

use Uetiko\Prueba\Backend\Order\Domain\Exception\OrderException;
use Uetiko\Prueba\Backend\Order\Domain\Order;
use Uetiko\Prueba\Backend\Order\Domain\OrderId;

interface OrderRepository
{
    const TABLE = 'order';

    /**
     * @param Order $order
     * @throws OrderException
     */
    public function save(Order $order):void;

    /**
     * @param Order $order
     * @throws OrderException
     */
    public function update(Order $order):void;

    /**
     * @param Order $order
     * @throws OrderException
     */
    public function delete(Order $order):void;

    /**
     * @param OrderId $id
     * @throws OrderException
     */
    public function findById(OrderId $id):void;
}
