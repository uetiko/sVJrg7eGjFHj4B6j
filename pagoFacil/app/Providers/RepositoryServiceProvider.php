<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Uetiko\Prueba\Backend\Address\Domain\Interfaces\AddressRepository;
use Uetiko\Prueba\Backend\Country\Infrastructure\CountryRepository;
use Uetiko\Prueba\Backend\Country\Domain\Interfaces\CountryRepository as
    CountryRepositoryInterface;
use Uetiko\Prueba\Backend\CreditCard\Infrastructure\CreditCardRepository;
use Uetiko\Prueba\Backend\CreditCard\Domain\Interfaces\CreditCardRepositoryInterfaces;
use Uetiko\Prueba\Backend\User\Infrastructure\UserRepository;
use Uetiko\Prueba\Backend\User\Domain\Interfaces\UserRepositoryInterfaces;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CreditCardRepository::class, function ($app){
                return new CreditCardRepository();
            }
        );
        $this->app->singleton(
            UserRepository::class, function ($app) {
                return new UserRepository();
            }
        );
        $this->app->singleton(
            CountryRepository::class, function ($app) {
                return new CountryRepository();
            }
        );
        $this->app->bind(
            AddressRepository::class, function ($app) {
                return new AddressRepository(
                    $this->app->make(CountryRepositoryInterface::class)
                );
            }
        );
        $this->app->bind(
            CreditCardRepositoryInterfaces::class,
            CreditCardRepository::class
        );
        $this->app->bind(
            CountryRepositoryInterface::class,
            CountryRepository::class
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
