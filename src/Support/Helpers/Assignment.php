<?php


namespace Emreokay\Routix\Support\Helpers;

use Emreokay\Routix\Exceptions\ParentNotFound;
use Emreokay\Routix\Support\Facades\Reader;
use Illuminate\Support\Arr;

class Assignment
{
    private $method;
    private $class;
    private $result;

    public function __construct()
    {
        $this->method = Reader::type('method')->get();
        $this->class  = Reader::type('class')->get();
    }

    private function method(): self
    {
        $this->result = $this->class->map(function ($class){
            return collect($class)->map(function ($item, $key) use ($class){
                if ($key == 'routes'){
                    $belongs = $this->method->filter(function ($method) use ($class){
                        return $method['belongs'] == $class['name'];
                    });
                    $item = collect($item)->push($belongs)->first()->values()->map(function ($item){
                        return collect($item)->forget('belongs')->toArray();
                    });
                }
                return $item;
            });
        });
        return $this;
    }

    private function detect()
    {
        $names     = $this->result->pluck('name')->toArray();
        $parents   = $this->result->filter(function ($item){
            return !$item['root'];
        })->pluck('parent');

        $parents->each(function ($parent) use ($names){
            if(!in_array($parent,$names)) throw new ParentNotFound();
        });

        return $this;
    }

    private function tree(array $elements, string $parent = null)
    {
        $branch = array();

        foreach ($elements as $element) {
            if ($element['parent'] == $parent) {
                $children = $this->tree($elements, $element['name']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }

        return $branch;
    }

    private function get()
    {
        return $this->tree($this->result->toArray());
    }

    public function generate()
    {
        return $this->method()->detect()->get();
    }
}
