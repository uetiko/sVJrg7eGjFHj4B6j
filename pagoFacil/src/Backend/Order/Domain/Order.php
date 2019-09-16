<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Order\Domain;
use Uetiko\Prueba\Backend\Order\Domain\OrderId;
use Uetiko\Prueba\Backend\Payment\Domain\Payment;

class Order
{
    /** @var OrderId $id */
    private $id = null;
    /** @var integer $quality */
    private $quality = null;
    /** @var float $subtotal */
    private $subtotal = null;
    /** @var float $total */
    private $total = null;
    /** @var float $tax */
    private $tax = null;
    /** @var Payment */
    private $payment = null;

    public function __construct(
        OrderId $id, int $quality, float $subtotal, float $tax, float $total,
        Payment $payment
    ){
        $this->id = $id;
        $this->quality = $quality;
        $this->subtotal = $subtotal;
        $this->tax = $tax;
        $this->total = $total;
        $this->payment = $payment;
    }

    /**
     * @return OrderId
     */
    public function getId(): OrderId
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getQuality(): int
    {
        return $this->quality;
    }

    /**
     * @return float
     */
    public function getSubtotal(): float
    {
        return $this->subtotal;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @return Payment
     */
    public function getPayment(): Payment
    {
        return $this->payment;
    }
}
