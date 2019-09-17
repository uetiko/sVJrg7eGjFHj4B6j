<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Domain;

use Uetiko\Prueba\Backend\PagoFacil\Domain\MethodId;

class Method
{
    /** @var MethodId $id */
    private $id;
    /** @var string $name */
    private $name;
    /** @var string $descrive */
    private $descrive;

    /**
     * Method constructor.
     * @param \Uetiko\Prueba\Backend\PagoFacil\Domain\MethodId $id
     * @param string $name
     */
    public function __construct(MethodId $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return \Uetiko\Prueba\Backend\PagoFacil\Domain\MethodId
     */
    public function getId(): \Uetiko\Prueba\Backend\PagoFacil\Domain\MethodId
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

}
