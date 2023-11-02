<?php

namespace Chiariello\LaravelItalianCities\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chiariello\LaravelItalianCities\LaravelItalianCities
 */
class LaravelItalianCities extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Chiariello\LaravelItalianCities\LaravelItalianCities::class;
    }
}
