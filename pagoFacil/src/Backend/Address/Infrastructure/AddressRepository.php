<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Address\Domain\Interfaces;

use Illuminate\Support\Facades\DB;
use Uetiko\Prueba\Backend\Address\Domain\Address;
use Uetiko\Prueba\Backend\Address\Domain\AddressId;
use Uetiko\Prueba\Backend\Address\Domain\Exceptions\AddressException;
use Uetiko\Prueba\Backend\Address\Domain\Interfaces\AddressRepositoryInterface;
use Uetiko\Prueba\Backend\Country\Domain\CountryId;
use Uetiko\Prueba\Backend\Country\Domain\Interfaces\CountryRepository;
use Uetiko\Prueba\Backend\User\Domain\UserId;

class AddressRepository implements AddressRepositoryInterface
{
    /** @var CountryRepository $countryRepository */
    private $countryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    public function save(Address $address): void
    {
        // TODO: Implement save() method.
    }

    public function findById(AddressId $id): void
    {
        // TODO: Implement findById() method.
    }

    public function update(Address $address): void
    {
        // TODO: Implement update() method.
    }
     public function findByUserId(UserId $id): Address
     {
         $address = DB::table(self::TABLE)
             ->where('user_id', $id->getValue())
             ->first();

         if (is_null($address)){
             throw AddressException::NotExist();
         }

         $country = $this->countryRepository->findById(
                 new CountryId($address->country_id)
             );

         return new Address(
             new AddressId($address->id), $address->street,
             $address->street_number, $address->suburb, $address->township,
             $address->state, $address->cp, $country
         );
     }
}
