<?php

namespace Bestfitcz\LaravelCzkExchangeRates;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bestfitcz\LaravelCzkExchangeRates\Commands\LaravelCzkExchangeRatesCommand;

class LaravelCzkExchangeRatesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-czk-exchange-rates')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_czk_exchange_rates_table')
            ->hasCommand(LaravelCzkExchangeRatesCommand::class);
    }
}
