<?php
declare(strict_types=);
namespace Uetiko\Prueba\Backend\Contact\Domain;

use Uetiko\Prueba\Backend\Contact\Domain\ContactId;

class Contact
{
    /** @var ContactId */
    private $id;
    /** @var Telephone $telephone */
    private $telephone;
    /** @var Email $email */
    private $email;

    public function __construct(
        ContactId $id, Telephone $telephone, Email $email
    )
    {
        $this->id = $id;
        $this->telephone = $telephone;
        $this->email = $email;
    }

    /**
     * @return \Uetiko\Prueba\Backend\Contact\Domain\ContactId
     */
    public function getId(): \Uetiko\Prueba\Backend\Contact\Domain\ContactId
    {
        return $this->id;
    }

    /**
     * @return Telephone
     */
    public function getTelephone(): Telephone
    {
        return $this->telephone;
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }
}
