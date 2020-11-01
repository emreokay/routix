<?php

namespace Emreokay\Routix\Providers\Traits;


use Emreokay\Routix\Support\Helpers\Path;

trait RegisterTrait
{
    protected function registerFacades()
    {
        $this->app->bind('path', function($app) {
            return new Path();
        });
    }
}
