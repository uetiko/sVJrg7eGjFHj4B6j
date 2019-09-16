<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Address\Domain;

use Uetiko\Prueba\Backend\Address\Domain\AddressId;
use Uetiko\Prueba\Backend\Country\Domain\Country;

class Address
{
    /** @var AddressId $id */
    private $id;
    /** @var string $street */
    private $street;
    /** @var string $outdoorNumber */
    private $outdoorNumber;
    /** @var string $suburb */
    private $suburb;
    /** @var string $township */
    private $township;
    /** @var string $state */
    private $state;
    /** @var string $cp */
    private $cp;
    /** @var Country $country */
    private $country;

    public function __construct(
        AddressId $id, string $street, string  $outdoorNumber, string $suburb,
        string $township, string $state, string $cp, Country $country
    )
    {
        $this->id = $id;
        $this->street = $street;
        $this->outdoorNumber = $outdoorNumber;
        $this->suburb = $suburb;
        $this->township = $township;
        $this->state = $state;
        $this->cp = $cp;
        $this->country = $country;
    }

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * @return \Uetiko\Prueba\Backend\Address\Domain\AddressId
     */
    public function getId(): \Uetiko\Prueba\Backend\Address\Domain\AddressId
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getOutdoorNumber(): string
    {
        return $this->outdoorNumber;
    }

    /**
     * @return string
     */
    public function getSuburb(): string
    {
        return $this->suburb;
    }

    /**
     * @return string
     */
    public function getTownship(): string
    {
        return $this->township;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getCp(): string
    {
        return $this->cp;
    }
}
