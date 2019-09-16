<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Country\Domain;

use Uetiko\Prueba\Backend\Country\Domain\CountryId;

class Country
{
    /** @var CountryId $id */
    private $id;
    /** @var string $name */
    private $name;
    /** @var string $code */
    private $code;

    public function __construct(CountryId $id, string $name, string $code)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
    }

    /**
     * @return \Uetiko\Prueba\Backend\Country\Domain\CountryId
     */
    public function getId(): \Uetiko\Prueba\Backend\Country\Domain\CountryId
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
    public function getCode(): string
    {
        return $this->code;
    }
}
