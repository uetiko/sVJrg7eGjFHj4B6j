<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\User\Domain;

use Uetiko\Prueba\Backend\Address\Domain\Address;
use Uetiko\Prueba\Backend\Contact\Domain\Contact;
use Uetiko\Prueba\Backend\Payment\Domain\Payment;
use Uetiko\Prueba\Backend\User\Domain\UserId;

class User
{
    /** @var UserId $id */
    private $id;
    /** @var string $name */
    private $name;
    /** @var string $middleName */
    private $middleName;
    /** @var string $lastName */
    private $lastName;
    /** @var Address $address */
    private $address;
    /** @var Contact $contact */
    private $contact;
    /** @var Payment $payments */
    private $payments;

    /**
     * User constructor.
     * @param \Uetiko\Prueba\Backend\User\Domain\UserId $id
     * @param string $name
     * @param string $middleName
     * @param string $lastName
     * @param Address $address
     * @param Contact $contact
     * @param Payment $payments
     */
    public function __construct(
        UserId $id, string $name, string $middleName, string $lastName,
        Address $address, Contact $contact, Payment $payments
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->contact = $contact;
        $this->payments = $payments;
    }

    /**
     * @return \Uetiko\Prueba\Backend\User\Domain\UserId
     */
    public function getId(): \Uetiko\Prueba\Backend\User\Domain\UserId
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return Contact
     */
    public function getContact(): Contact
    {
        return $this->contact;
    }

    /**
     * @return Payment
     */
    public function getPayments(): Payment
    {
        return $this->payments;
    }
}
