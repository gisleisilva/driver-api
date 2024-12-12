<?php

namespace App\Providers;

use App\Repositories\DriverUserRepository;
use App\Repositories\DriverUserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            DriverUserRepositoryInterface::class,
            DriverUserRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
