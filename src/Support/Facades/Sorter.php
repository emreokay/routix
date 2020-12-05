<?php


namespace Emreokay\Routix\Support\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Sorter class(Collection $collection)
 * @method static Sorter method(Collection $collection)
 */
class Sorter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routix.sorter';
    }
}
