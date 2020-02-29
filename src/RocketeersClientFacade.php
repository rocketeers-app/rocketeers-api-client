<?php

namespace Rocketeers\API;

use Illuminate\Support\Facades\Facade;

class RocketeersClientFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rocketeers-client';
    }
}
