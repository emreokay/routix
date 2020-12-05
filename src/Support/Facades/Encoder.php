<?php


namespace Emreokay\Routix\Support\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Encoder class(Collection $collection)
 * @method static Encoder method(Collection $collection)
 */
class Encoder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routix.encoder';
    }
}
