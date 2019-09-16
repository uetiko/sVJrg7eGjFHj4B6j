<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Payment\Domain;

use Uetiko\Prueba\Backend\CreditCard\Domain\CreditCard;
use Uetiko\Prueba\Backend\Payment\Domain\PaymentId;

class Payment
{
    /** @var PaymentId $id */
    private $id;
    /** @var CreditCard $card */
    private $card;

    public function __construct(PaymentId $id, CreditCard $creditCard)
    {
        $this->id = $id;
        $this->card = $creditCard;
    }

    /**
     * @return \Uetiko\Prueba\Backend\Payment\Domain\PaymentId
     */
    public function getId(): \Uetiko\Prueba\Backend\Payment\Domain\PaymentId
    {
        return $this->id;
    }

    /**
     * @return CreditCard
     */
    public function getCard(): CreditCard
    {
        return $this->card;
    }
}
