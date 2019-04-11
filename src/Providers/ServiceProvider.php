<?php

namespace Leonis\Kyc\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->apiRoutes();
        $this->loadMigrationsFrom(__DIR__.'/../Migrations');
    }

    protected function apiRoutes()
    {
        Route::group([
            'prefix' => 'api',
            'namespace' => 'Leonis\\Kyc\\Controllers',
            'middleware' => ['auth:api'],
        ], function ($router) {
            require __DIR__.'/../Routes/api.php';
        });
    }
}