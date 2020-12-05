<?php


namespace Emreokay\Routix\Support\Helpers;


use Illuminate\Support\Collection;

class Sorter
{
    public function class(Collection $collection)
    {
        return $collection->map(function ($item){
            return [
                'root'            => $item['root'],
                'parent'          => $item['parent'],
                'name'            => $item['name'],
                'title'           => $item['title'],
                'description'     => $item['description'],
                'text'            => $item['text'],
                'routes'          => $item['routes'],
                'children'        => $item['children'],
            ];
        });
    }

    public function method(Collection $collection)
    {
        return $collection->map(function ($item){
            return [
                'belongs'           => $item['belongs'],
                'url'               => $item['url'],
                'method'            => $item['method'],
                'description'       => $item['description'],
                'parameters'        => $item['parameters']->map(function ($parameter){
                    return [
                        'name'         => $parameter['name'],
                        'example'      => $parameter['example'],
                        'must'         => $parameter['must'],
                        'where'        => $parameter['where'],
                        'type'         => $parameter['type'],
                    ];
                }),
                'responses'         => $item['responses']->map(function ($response){
                    return [
                        'http_status_code'     => $response['http_status_code'],
                        'error_code'           => $response['error_code'],
                        'example'              => $response['example']
                    ];
                }),
            ];
        });
    }
}
