<?php


namespace Emreokay\Routix\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Routix write()
 * @method static Routix read()
 */
class Routix extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routix.routix';
    }
}
