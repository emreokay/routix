<?php


namespace Emreokay\Routix\Support\Helpers;


use Illuminate\Support\Collection;

class Complement
{
    private $classKeys;

    public function __construct()
    {
        $this->classKeys = ['root','name','title','description','text','image','parent','routes','children'];
    }

    public function class(Collection $collection)
    {
        return $collection->map(function ($item){
            $item['doc'] = collect($item['doc']);
            $item['doc']->when(!$item['doc']->has('root'), function ($collection){
                return $collection->put('root',false);
            });
            $item['doc']->when(!$item['doc']->has('parent'), function ($collection){
                return $collection->put('parent',null);
            });
            $item['doc']->when(!$item['doc']->has('image'), function ($collection){
                return $collection->put('image',null);
            });
            $item['doc']->when(!$item['doc']->has('routes'), function ($collection){
                return $collection->put('routes',[]);
            });
            $item['doc']->when(!$item['doc']->has('children'), function ($collection){
                return $collection->put('children',[]);
            });
            $item['doc'] = $item['doc']->filter(function ($value, $key){
                return in_array($key,$this->classKeys);
            });
            return $item['doc'];
        });
    }

    public function method(Collection $collection)
    {
        return $collection->map(function ($item){
            if(!$item['doc']->has('method')) $item['doc']->put('method',$item['data']['method']);
            if(!$item['doc']->has('url')) $item['doc']->put('url',$item['data']['url']);

            $item['doc']['parameters'] = collect($item['doc']['parameters'])->map(function ($parameter){
                $parameter = collect($parameter);
                if(!$parameter->has('example')) $parameter->put('example',null);
                return $parameter;
            });

            $item['doc']['responses'] = collect($item['doc']['responses'])->map(function ($response){
                $response = collect($response);
                if(!$response->has('error_code')) $response->put('error_code',null);
                return $response;
            });

            return $item['doc'];
        });
    }
}
