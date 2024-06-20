<?php

namespace App\Providers;

use App\Contracts\Interfaces\ExampleInterface;
use App\Contracts\Repositories\ExampleRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

     private array $register = [
        ExampleInterface::class => ExampleRepository::class
    ];

    public function register(): void
    {
        foreach ($this->register as $index => $value) $this->app->bind($index, $value);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
