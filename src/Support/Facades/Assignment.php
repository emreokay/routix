<?php


namespace Emreokay\Routix\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Assignment generate()
 */
class Assignment extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routix.assignment';
    }
}
