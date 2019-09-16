<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Contact\Domain;

use Uetiko\Prueba\Backend\Contact\Domain\EmailID;
use Uetiko\Prueba\Shared\Domain\ValueObject\Uuid;

class Email
{
    /** @var EmailID $id */
    private $id = null;
    /** @var string $email */
    private $email = null;
    /** @var string $code */
    private $code = null;

    public function __construct(EmailID $id, string $email)
    {
        $this->id = $id;
        $this->email = $email;
        $this->code = 'email';
    }

    /**
     * @return EmailID
     */
    public function getId(): EmailID
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

}
