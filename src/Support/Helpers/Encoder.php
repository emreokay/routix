<?php


namespace Emreokay\Routix\Support\Helpers;


use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Encoder
{
    public function class(Collection $collection)
    {
        return $collection;
    }

    public function method(Collection $collection)
    {
        return $collection->map(function ($method){
            $method['doc'] = collect($method['doc']);

            $parameters = $method['doc']->filter(function ($item,$key){
                return Str::contains($key,'parameter-');
            })->map(function ($item){
                return collect(json_decode($item))->toArray();
            })->values()->toArray();

            $responses = $method['doc']->filter(function ($item,$key){
                return Str::contains($key,'response-');
            })->map(function ($item){
                return collect(json_decode($item))->map(function ($item, $key){
                    return $key == 'example' ? json_encode($item) : $item;
                })->toArray();
            })->values()->toArray();

            $method['doc'] = $method['doc']->filter(function ($item, $key){
                return !(Str::contains($key,'parameter-') || Str::contains($key,'response-'));
            })->put('parameters',$parameters)->put('responses',$responses);

            return $method;

        });
    }
}
