<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Company\Domain\Interfaces;

use Uetiko\Prueba\Backend\Company\Domain\Company;
use Uetiko\Prueba\Backend\Company\Domain\CompanyId;
use Uetiko\Prueba\Backend\Company\Domain\Exceptions\CompanyException;

interface CompanyRepository
{
    const TABLE = 'company';

    /**
     * @param Company $company
     * @throws CompanyException
     */
    public function save(Company $company):void;

    /**
     * @param Company $company
     * @throws CompanyException
     */
    public function update(Company $company): void;

    /**
     * @param CompanyId $id
     * @throws CompanyException
     */
    public function delete(CompanyId $id):void;

    /**
     * @param CompanyId $id
     * @return Company
     * @throws CompanyException
     */
    public function findById(CompanyId $id): Company;

    /**
     * @param string $name
     * @return Company
     * @throws CompanyException
     */
    public function findByName(string $name): Company;
}
