<?php

namespace Oneduo\LaravelCloudfrontCookies\Tests;

use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Support\Facades\Route;
use Oneduo\LaravelCloudfrontCookies\Http\Middleware\CloudfrontSignedCookiesMiddleware;
use Oneduo\LaravelCloudfrontCookies\LaravelCloudfrontCookiesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected $loadEnvironmentVariables = true;

    protected function setUp(): void
    {
        parent::setUp();

        Route::middleware([CloudfrontSignedCookiesMiddleware::class, AddQueuedCookiesToResponse::class])
            ->get('/', function () {
                return 'ok';
            });
    }

    protected function getPackageProviders($app): array
    {
        return [
            LaravelCloudfrontCookiesServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        config()->set('services', [
            'cloudfront' => [

            ],
        ]);
    }
}
