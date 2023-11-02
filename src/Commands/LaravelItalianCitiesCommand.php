<?php

namespace Chiariello\LaravelItalianCities\Commands;

use Illuminate\Console\Command;

class LaravelItalianCitiesCommand extends Command
{
    public $signature = 'laravel-italian-cities';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
