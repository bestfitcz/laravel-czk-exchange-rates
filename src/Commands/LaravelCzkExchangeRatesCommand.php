<?php

namespace Bestfitcz\LaravelCzkExchangeRates\Commands;

use Illuminate\Console\Command;

class LaravelCzkExchangeRatesCommand extends Command
{
    public $signature = 'laravel-czk-exchange-rates';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
