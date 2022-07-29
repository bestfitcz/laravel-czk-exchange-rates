<?php

namespace Bestfitcz\LaravelCzkExchangeRates\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bestfitcz\LaravelCzkExchangeRates\LaravelCzkExchangeRates
 */
class LaravelCzkExchangeRates extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-czk-exchange-rates';
    }
}
