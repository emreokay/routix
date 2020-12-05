<?php


namespace Emreokay\Routix\Support\Helpers;


use Emreokay\Routix\Enums\Filter;
use Emreokay\Routix\Exceptions\FilterNotFoundException;
use Emreokay\Routix\Support\Traits\BrowserColumns;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class Browser
{
    use BrowserColumns;

    /**
     * @var \Illuminate\Support\Collection
     */
    private $routes;

    private $type;
    private $class;
    private $method;

    /**
     * Browser constructor.
     */
    public function __construct()
    {
        $this->routes = collect(Route::getRoutes());
    }

    public function class()
    {
        $this->type = 'class';

        $this->class = $this->routes->map(function ($route) {
            return  [
                'action' => $this->action($route),
            ];
        })->unique('action')->values()->flatten(1);

        return $this;
    }

    public function method()
    {
        $this->type = 'method';

        $this->method = $this->routes->map(function ($route) {
            return  [
                'action' => $this->action($route),
                'method' => $this->methods($route),
                'func'   => $this->func($route),
                'url'    => $this->uri($route),
            ];
        })->values();

        return $this;
    }

    public function get()
    {
        return $this->{$this->type};
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function all()
    {
        return $this->routes->map(function ($route) {
                return  [
                    'domain' => $this->domain($route),
                    'method' => $this->methods($route),
                    'uri'    => $this->uri($route),
                    'name'   => $this->name($route),
                    'action' => $this->action($route),
                ];
            })->unique('action');
    }

    public function filter(string $type, string $query)
    {
        if(!in_array($type,Filter::TYPES)){
            throw new FilterTypeNotFoundException();
        }

        return $this->all()
            ->when($type === Filter::STARTS_WITH, function ($collection) use ($query){
                return $collection->filter(function ($item) use ($query){
                    return Str::startsWith($item['uri'], $query);
                });
            })
            ->when($type === Filter::CONTAINS, function ($collection) use ($query){
                return $collection->filter(function ($item) use ($query){
                    return Str::contains($item['uri'], $query);
                });
            })->values();
    }
}
