<?php

namespace Weward\Summoner\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Weward\Summoner\Summoner
 */
class Summoner extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Weward\Summoner\Summoner::class;
    }
}
