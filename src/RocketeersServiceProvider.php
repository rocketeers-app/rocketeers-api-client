<?php

namespace Rockteers;

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
        $this->app->singleton('rocketeers', function () {
            return new Rocketeers;
        });
    }
}
