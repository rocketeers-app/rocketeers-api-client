<?php

namespace Rocketeers;

use Illuminate\Support\ServiceProvider;
use Rocketeers\Rocketeers;

class RocketeersServiceProvider extends ServiceProvider
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
        $this->app->singleton('rocketeers.client', function ($app) {
            return new Rocketeers(config('services.rocketeers.token') ?: config('rocketeers.api_token'));
        });

        $this->app->alias('rocketeers.client', Rocketeers::class);
    }
}
