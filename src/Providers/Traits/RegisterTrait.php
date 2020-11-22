<?php

namespace Emreokay\Routix\Providers\Traits;


use Emreokay\Routix\Support\Helpers\Browser;
use Emreokay\Routix\Support\Helpers\Parser;
use Emreokay\Routix\Support\Helpers\Path;
use Emreokay\Routix\Support\Helpers\Reader;

trait RegisterTrait
{
    protected function registerFacades()
    {
        $this->app->bind('routix.path', function($app) {
            return new Path();
        });
        $this->app->bind('routix.browser', function($app) {
            return new Browser();
        });
        $this->app->bind('routix.reader', function($app) {
            return new Reader();
        });
        $this->app->bind('routix.parser', function($app) {
            return new Parser();
        });
    }
}
