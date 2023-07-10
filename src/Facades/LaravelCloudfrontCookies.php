<?php

declare(strict_types=1);

namespace Oneduo\LaravelCloudfrontCookies\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Oneduo\LaravelCloudfrontCookies\LaravelCloudfrontCookies
 *
 * @method static \Oneduo\LaravelCloudfrontCookies\LaravelCloudfrontCookies resource(string $domain)
 * @method static \Oneduo\LaravelCloudfrontCookies\LaravelCloudfrontCookies expiresAt(\Illuminate\Support\Carbon $expires_at)
 * @method static \Oneduo\LaravelCloudfrontCookies\LaravelCloudfrontCookies policy(?string $policy = null)
 * @method static array get()
 */
class LaravelCloudfrontCookies extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Oneduo\LaravelCloudfrontCookies\LaravelCloudfrontCookies::class;
    }
}
