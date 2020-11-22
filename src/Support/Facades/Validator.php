<?php


namespace Emreokay\Routix\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Validator class(array $doc)
 */
class Validator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routix.validator';
    }
}
