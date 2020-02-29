<?php

namespace Rocketeers\API\Tests;

use Orchestra\Testbench\TestCase;
use Rockteers\API\RocketeersClientServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [RocketeersClientServiceProvider::class];
    }
}
