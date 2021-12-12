<?php

namespace Kakadigi\FlorenceComponent\Test;

use Illuminate\Foundation\Testing\WithFaker;
use Orchestra\Testbench\TestCase as Orchestra;
use Kakadigi\FlorenceComponent\FlorenceServiceProvider;

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
