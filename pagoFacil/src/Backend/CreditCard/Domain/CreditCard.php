<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\CreditCard\Domain;

use DateTime;
use Uetiko\Prueba\Backend\CreditCard\Domain\CardId;

class CreditCard
{
    /** @var CardId $id */
    private $id = null;
    /** @var string $typeCard */
    private $typeCard = null;
    /** @var int $number */
    private $number = null;
    /** @var string $cvt */
    private $cvt = null;
    /** @var DateTime $expiration */
    private $expiration = null;
    /** @var string $lastDigits */
    private $lastDigits = null;

    public function __construct(
        CardId $id, string $typeCard, int $number, string $cvt,
        DateTime $expiration
    )
    {
        $this->id = $id;
        $this->typeCard = $typeCard;
        $this->number = $number;
        $this->cvt = $cvt;
        $this->expiration = $expiration;
    }

    /**
     * @return \Uetiko\Prueba\Backend\CreditCard\Domain\CardId
     */
    public function getId(): CardId
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTypeCard(): string
    {
        return $this->typeCard;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getCvt(): string
    {
        return $this->cvt;
    }

    /**
     * @return string
     */
    public function getExpirationYear(): string
    {
        return $this->expiration->format('y');
    }

    /**
     * @return string
     */
    public function getExpirationMonth(): string
    {
        return $this->expiration->format('m');
    }

    /**
     * @return string
     */
    public function getLastDigits(): string
    {
        return $this->lastDigits;
    }

    protected function setLastDigits(string $numbers): void
    {
        $this->lastDigits = substr($numbers, -4);
    }
}
