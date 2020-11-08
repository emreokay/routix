<?php


namespace Emreokay\Routix\Support\Helpers;


class Path
{
    private function root()
    {
        return __DIR__.'/../../..';
    }

    public function to(string $path)
    {
        return $this->root().$path;
    }
}
