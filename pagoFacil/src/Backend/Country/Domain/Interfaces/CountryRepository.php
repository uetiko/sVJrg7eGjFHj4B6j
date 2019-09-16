<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Country\Domain\Interfaces;

use Uetiko\Prueba\Backend\Country\Domain\Country;
use Uetiko\Prueba\Backend\Country\Domain\CountryId;
use Uetiko\Prueba\Backend\Country\Domain\Exceptions\CountryException;

interface CountryRepository
{
    /**
     * Name of the database table
     */
    const TABLE = 'country';

    /**
     * @param Country $country
     * @throws CountryException
     */
    public function save(Country $country): void;

    /**
     * @param Country $country
     * @throws CountryException
     */
    public function update(Country $country):void;

    /**
     * @param CountryId $id
     * @throws CountryException
     */
    public function delete(CountryId $id):void;

    /**
     * @param CountryId $id
     * @return Country
     * @throws CountryException
     */
    public function findById(CountryId $id): Country;

    /**
     * @param string $code
     * @return Country
     * @throws CountryException
     */
    public function findByCode(string $code): Country;
}
