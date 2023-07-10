<?php

declare(strict_types=1);

namespace Oneduo\LaravelCloudfrontCookies;

use Aws\CloudFront\CloudFrontClient;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCloudfrontCookiesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-cloudfront-cookies')
            ->hasConfigFile('cloudfront');
    }

    public function packageBooted(): void
    {
        $this->app->singleton(CloudFrontClient::class, function () {
            return new CloudFrontClient([
                'version' => config('cloudfront.version'),
                'region' => config('cloudfront.region'),
            ]);
        });
    }
}
