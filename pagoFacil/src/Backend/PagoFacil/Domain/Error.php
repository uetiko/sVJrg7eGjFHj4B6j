<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Domain;

use Uetiko\Prueba\Backend\PagoFacil\Domain\ErrorId;

class Error
{
    /** @var ErrorId $id */
    private $id;
    /** @var string $description */
    private $description;

    public function __construct(ErrorId $id, string $description)
    {
        $this->id = $id;
        $this->description = $description;
    }

    /**
     * @return \Uetiko\Prueba\Backend\PagoFacil\Domain\ErrorId
     */
    public function getId(): \Uetiko\Prueba\Backend\PagoFacil\Domain\ErrorId
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
