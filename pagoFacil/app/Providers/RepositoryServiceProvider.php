<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Uetiko\Prueba\Backend\CreditCard\Infrastructure\CreditCardRepository;
use Uetiko\Prueba\Backend\CreditCard\Domain\Interfaces\CreditCardRepositoryInterfaces;

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
        $this->app->bind(
            CreditCardRepositoryInterfaces::class,
            CreditCardRepository::class
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
