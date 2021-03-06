<?php

namespace Emreokay\Routix\Providers\Traits;


use Emreokay\Routix\Support\Helpers\Assignment;
use Emreokay\Routix\Support\Helpers\Browser;
use Emreokay\Routix\Support\Helpers\Complement;
use Emreokay\Routix\Support\Helpers\Encoder;
use Emreokay\Routix\Support\Helpers\Parser;
use Emreokay\Routix\Support\Helpers\Path;
use Emreokay\Routix\Support\Helpers\Reader;
use Emreokay\Routix\Support\Helpers\Routix;
use Emreokay\Routix\Support\Helpers\Sorter;
use Emreokay\Routix\Support\Helpers\Validator;

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
        $this->app->bind('routix.validator', function($app) {
            return new Validator();
        });
        $this->app->bind('routix.complement', function($app) {
            return new Complement();
        });
        $this->app->bind('routix.sorter', function($app) {
            return new Sorter();
        });
        $this->app->bind('routix.encoder', function($app) {
            return new Encoder();
        });
        $this->app->bind('routix.assignment', function($app) {
            return new Assignment();
        });
        $this->app->bind('routix.routix', function($app) {
            return new Routix();
        });
    }
}
