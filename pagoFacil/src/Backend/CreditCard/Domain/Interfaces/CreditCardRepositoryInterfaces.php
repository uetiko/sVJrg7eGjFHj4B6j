<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\CreditCard\Domain\Interfaces;

use \stdClass;
use Uetiko\Prueba\Backend\CreditCard\Domain\CardId;
use Uetiko\Prueba\Backend\CreditCard\Domain\CreditCard;
use Uetiko\Prueba\Backend\CreditCard\Domain\Exceptions\CreditCardException;
use Uetiko\Prueba\Backend\Payment\Domain\Exceptons\PaymentException;
use Uetiko\Prueba\Backend\Payment\Domain\Payment;
use Uetiko\Prueba\Backend\User\Domain\UserId;

interface CreditCardRepositoryInterfaces
{
    /**
     * @param CreditCard $creditCard
     * @param UserId $userId
     * @throws CreditCardException
     */
    public function save(CreditCard $creditCard, UserId $userId): void;

    /**
     * @param CardId $id
     * @return CreditCard
     * @throws CreditCardException
     */
    public function find(CardId $id): CreditCard;

    /**
     * @param UserId $userId
     * @return CreditCard
     * @throws CreditCardException
     */
    public function findByUserId(UserId $userId): CreditCard;

    /**
     * @return \ArrayAccess
     */
    public function findAll(): \ArrayAccess;

    /**
     * @param string $name
     * @return stdClass
     * @throws CreditCardException
     */
    public function findTypeCardByName(string $name): stdClass;

    /**
     * @param string $name
     * @return string
     * @throws CreditCardException
     */
    public function getTypeCardUuidByName(string $name): string;

    /**
     * @param CardId $id
     * @return stdClass
     * @throws CreditCardException
     */
    public function getTypeCardById(CardId $id): stdClass;

    /**
     * @param Payment $payment
     * @param UserId $userId
     * @throws PaymentException
     */
    public function savePayment(Payment $payment, UserId $userId): void;

    /**
     * @param Payment $payment
     * @param UserId $userId
     * @throws PaymentException
     */
    public function updatePayment(Payment $payment, UserId $userId): void;

    /**
     * @param UserId $userId
     * @return Payment
     * @throws PaymentException
     */
    public function findPayment(UserId $userId):Payment;
}
