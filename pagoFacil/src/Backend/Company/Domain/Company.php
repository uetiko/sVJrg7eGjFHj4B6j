<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Company\Domain;

use Uetiko\Prueba\Backend\Company\Domain\CompanyId;

class Company
{
    /** @var CompanyId $id */
    private $id;
    /** @var string $name */
    private $name;
    /** @var string $code */
    private $code;
    /** @var  */
    private $idSucursal;

   public function __construct(CompanyId $id, string $name, string $code)
   {
       $this->id = $id;
       $this->name = $name;
       $this->code = $code;
   }


    /**
     * @return \Uetiko\Prueba\Backend\Company\Domain\CompanyId
     */
    public function getId(): \Uetiko\Prueba\Backend\Company\Domain\CompanyId
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
