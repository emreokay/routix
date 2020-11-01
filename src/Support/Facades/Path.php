<?php


namespace Emreokay\Routix\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Path path(string $path)
 */
class Path extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'path';
    }
}
