<?php


namespace Emreokay\Routix\Support\Traits;


trait BrowserColumns
{
    private function domain($route)
    {
        return $route->domain();
    }

    private function methods($route)
    {
        return $route->methods()[0] ?? $route->methods();
    }

    private function uri($route)
    {
        return $route->uri();
    }

    private function name($route)
    {
        return $route->getName();
    }

    private function action($route)
    {
        return explode('@',$route->getActionName())[0] ?? $route->getActionName();
    }

    private function func($route)
    {
        return explode('@',$route->getActionName())[1] ?? null;
    }
}
