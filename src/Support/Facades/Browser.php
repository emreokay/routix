<?php


namespace Emreokay\Routix\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Browser class()
 * @method static Browser method()
 * @method static Browser get()
 * @method static Browser all()
 * @method static Browser filter(string $type, string $query)
 */
class Browser extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routix.browser';
    }
}
