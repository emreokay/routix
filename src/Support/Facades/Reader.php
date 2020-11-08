<?php


namespace Emreokay\Routix\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Reader all()
 */
class Reader extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routix.reader';
    }
}
