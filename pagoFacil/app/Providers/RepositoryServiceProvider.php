<?php

namespace App\Providers;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Uetiko\Prueba\Backend\Address\Domain\Interfaces\AddressRepository;
use Uetiko\Prueba\Backend\Address\Domain\Interfaces\AddressRepositoryInterface;
use Uetiko\Prueba\Backend\Country\Infrastructure\CountryRepository;
use Uetiko\Prueba\Backend\Country\Domain\Interfaces\CountryRepository as
    CountryRepositoryInterface;
use Uetiko\Prueba\Backend\CreditCard\Infrastructure\CreditCardRepository;
use Uetiko\Prueba\Backend\CreditCard\Domain\Interfaces\CreditCardRepositoryInterfaces;
use Uetiko\Prueba\Backend\User\Infrastructure\UserRepository;
use Uetiko\Prueba\Backend\User\Domain\Interfaces\UserRepositoryInterfaces;
use Uetiko\Prueba\Backend\Contact\Domain\Interfaces\ContactRepository as
    IContactRepository;
use Uetiko\Prueba\Backend\Contact\Infrastructure\ContactRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CreditCardRepositoryInterfaces::class,
            CreditCardRepository::class
        );
        $this->app->bind(
            CountryRepositoryInterface::class,
            CountryRepository::class
        );
        $this->app->bind(
            AddressRepositoryInterface::class,
                AddressRepository::class
        );
        $this->app->bind(
            IContactRepository::class,
            ContactRepository::class
        );
        $this->app->bind(
            UserRepositoryInterfaces::class,
            UserRepository::class
        );
        $this->app->singleton(
            CountryRepository::class, function ($app) {
            /** @var Application $app */
                return new CountryRepository();
            }
        );
        $this->app->bind(
            AddressRepository::class, function ($app) {
                /** @var Application $app */
                return new AddressRepository(
                    $app->make(CountryRepositoryInterface::class)
                );
            }
        );
        $this->app->singleton(
            CreditCardRepository::class, function ($app){
            /** @var Application $app */
                return new CreditCardRepository();
            }
        );
        $this->app->singleton(
            UserRepository::class, function ($app) {
            /** @var Application $app */
                return new UserRepository(
                    resolve(AddressRepositoryInterface::class),
                    resolve(IContactRepository::class),
                    resolve(CreditCardRepositoryInterfaces::class)
                );
            }
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
