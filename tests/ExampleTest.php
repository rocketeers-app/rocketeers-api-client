<?php

namespace Rocketeers\API\Tests;

use Orchestra\Testbench\TestCase;
use Rockteers\RocketeersServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [RocketeersServiceProvider::class];
    }
}
