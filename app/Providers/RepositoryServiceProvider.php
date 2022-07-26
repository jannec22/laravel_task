<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
            App\Interfaces\CarRepositoryInterface::class,
            App\Repositories\CarRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
