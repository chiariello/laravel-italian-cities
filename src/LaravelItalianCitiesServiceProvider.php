<?php

namespace Chiariello\LaravelItalianCities;

use App\Console\Commands\GetCities;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelItalianCitiesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-italian-cities')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_cities_table')
            ->hasCommand(GetCities::class);
    }
}
