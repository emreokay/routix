<?php


namespace Emreokay\Routix\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Parser get(string $text)
 */
class Parser extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routix.parser' ;
    }
}
