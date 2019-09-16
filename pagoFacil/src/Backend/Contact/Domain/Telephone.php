<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Contact\Domain;

use Uetiko\Prueba\Backend\Contact\Domain\TelephoneId;

class Telephone
{
    /** @var TelephoneId $id */
    private $id;
    /** @var string $code */
    private $code;
    /** @var string $name */
    private $name;
    /** @var string $number */
    private $number;

    public function __construct(
        TelephoneId $id, string $code, string $name, string $number
    )
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->number = $number;
    }

    /**
     * @return \Uetiko\Prueba\Backend\Contact\Domain\TelephoneId
     */
    public function getId(): \Uetiko\Prueba\Backend\Contact\Domain\TelephoneId
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
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
    public function getNumber(): string
    {
        return $this->number;
    }
}
