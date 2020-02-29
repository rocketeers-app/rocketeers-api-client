<?php

namespace Rocketeers\Tests;

use Orchestra\Testbench\TestCase;
use Rocketeers\RocketeersServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [RocketeersServiceProvider::class];
    }
}
