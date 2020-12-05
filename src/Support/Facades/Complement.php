<?php


namespace Emreokay\Routix\Support\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Complement class(Collection $collection)
 * @method static Complement method(Collection $collection)
 */
class Complement extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routix.complement';
    }
}
