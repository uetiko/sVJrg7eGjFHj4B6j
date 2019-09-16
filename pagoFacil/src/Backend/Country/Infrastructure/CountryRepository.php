<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Country\Infrastructure;

use Uetiko\Prueba\Backend\Country\Domain\Country;
use Uetiko\Prueba\Backend\Country\Domain\CountryId;
use Uetiko\Prueba\Backend\Country\Domain\Exceptions\CountryException;
use Uetiko\Prueba\Backend\Country\Domain\Interfaces\CountryRepository as
    Repository;

class CountryRepository implements Repository
{

    /**
     * @param Country $country
     * @throws CountryException
     */
    public function save(Country $country): void
    {
        // TODO: Implement save() method.
    }

    /**
     * @param Country $country
     * @throws CountryException
     */
    public function update(Country $country): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @param CountryId $id
     * @throws CountryException
     */
    public function delete(CountryId $id): void
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param CountryId $id
     * @return Country
     * @throws CountryException
     */
    public function findById(CountryId $id): Country
    {
        // TODO: Implement findById() method.
    }

    /**
     * @param string $code
     * @return Country
     * @throws CountryException
     */
    public function findByCode(string $code): Country
    {
        // TODO: Implement findByCode() method.
    }
}
