<?php

namespace Markvaneijk\RocketeersLaravel;

use Illuminate\Support\Facades\Facade;

class RocketeersClientFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rocketeers-client';
    }
}
