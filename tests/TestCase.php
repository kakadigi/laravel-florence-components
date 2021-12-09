<?php

namespace Kakadigi\Florence\Components\Test;

use Illuminate\Foundation\Testing\WithFaker;
use Orchestra\Testbench\TestCase as Orchestra;
use Kakadigi\Florence\Components\FlorenceServiceProvider;

class TestCase extends Orchestra
{
    use WithFaker;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FlorenceServiceProvider::class,
        ];
    }
}
