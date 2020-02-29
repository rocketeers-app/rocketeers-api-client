<?php

namespace Rocketeers\Facades;

use Illuminate\Support\Facades\Facade;

class RocketeersFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rocketeers.client';
    }
}
