<?php

namespace Rockteers\API;

use Illuminate\Support\ServiceProvider;

class RocketeersClientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('rocketeers-client', function () {
            return new RocketeersClient;
        });
    }
}
