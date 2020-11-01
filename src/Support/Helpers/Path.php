<?php


namespace Emreokay\Routix\Support\Helpers;


class Path
{
    private function root()
    {
        return __DIR__.'/../../..';
    }

    public function path(string $path)
    {
        return $this->root().$path;
    }
}
