<?php


namespace Emreokay\Routix\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Reader class()
 * @method static Reader method()
 * @method static Reader get()
 */
class Reader extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routix.reader';
    }
}
