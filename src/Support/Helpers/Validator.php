<?php


namespace Emreokay\Routix\Support\Helpers;


use Emreokay\Routix\Enums\Parameter;
use Emreokay\Routix\Exceptions\BelongsNotFound;
use Emreokay\Routix\Exceptions\DescriptionNotFound;
use Emreokay\Routix\Exceptions\HasRootParent;
use Emreokay\Routix\Exceptions\MethodDescriptionNotFound;
use Emreokay\Routix\Exceptions\MethodParameterNotFound;
use Emreokay\Routix\Exceptions\MethodResponseNotFound;
use Emreokay\Routix\Exceptions\NameNotFound;
use Emreokay\Routix\Exceptions\ParameterExampleNotFound;
use Emreokay\Routix\Exceptions\ParameterMustNotFound;
use Emreokay\Routix\Exceptions\ParameterMustNotSupported;
use Emreokay\Routix\Exceptions\ParameterNameNotFound;
use Emreokay\Routix\Exceptions\ParameterTypeNotFound;
use Emreokay\Routix\Exceptions\ParameterWhereNotFound;
use Emreokay\Routix\Exceptions\ParameterWhereNotSupported;
use Emreokay\Routix\Exceptions\ParentNotFound;
use Emreokay\Routix\Exceptions\ResponseExampleNotFound;
use Emreokay\Routix\Exceptions\ResponseHttpStatusCodeNotFound;
use Emreokay\Routix\Exceptions\RootMultiple;
use Emreokay\Routix\Exceptions\RootNotFound;
use Emreokay\Routix\Exceptions\SimilarName;
use Emreokay\Routix\Exceptions\TextNotFound;
use Emreokay\Routix\Exceptions\TitleNotFound;
use Illuminate\Support\Collection;

class Validator
{
    public function class(Collection $collection)
    {
        $collection->each(function ($item){
            $item['doc'] = collect($item['doc']);
            if($item['doc']->has('parent') && $item['doc']->has('root')) throw new HasRootParent();
            if($item['doc']->has('parent') && empty($item['doc']->get('parent')) && !$item['doc']->has('root'))throw new ParentNotFound();
            if(!$item['doc']->has('parent') && !$item['doc']->has('root')) throw new ParentNotFound();
            if(!$item['doc']->has('name')) throw new NameNotFound();
            if(!$item['doc']->has('title')) throw new TitleNotFound();
            if(!$item['doc']->has('description')) throw new DescriptionNotFound();
            if(!$item['doc']->has('text')) throw new TextNotFound();
        });

        if ($collection->sum('doc.root') < 1){
            throw new RootNotFound();
        }

        if ($collection->sum('doc.root') > 1){
            throw new RootMultiple();
        }

        $collection->countBy('doc.name')->each(function ($item){
            if ($item > 1) throw new SimilarName();
        });

        return $collection;
    }

    public function method(Collection $collection)
    {
        $collection->each(function ($item){
            $item['doc'] = collect($item['doc']);
            if(!$item['doc']->has('belongs') || is_bool($item['doc']->get('belongs'))) throw new BelongsNotFound();
            if(!$item['doc']->has('description') || is_bool($item['doc']->get('description'))) throw new MethodDescriptionNotFound();
            if(count($item['doc']['parameters']) < 1) throw new MethodParameterNotFound();
            if(count($item['doc']['responses']) < 1) throw new MethodResponseNotFound();

            collect($item['doc']['parameters'])->each(function ($parameter){
                $parameter = collect($parameter);
                if (!$parameter->has('name')) throw new ParameterNameNotFound();
                if (!$parameter->has('must')) throw new ParameterMustNotFound();
                if (!$parameter->has('where')) throw new ParameterWhereNotFound();
                if (!$parameter->has('type')) throw new ParameterTypeNotFound();
                if (!in_array($parameter->get('must'),Parameter::MUST)) throw new ParameterMustNotSupported();
                if (!in_array($parameter->get('where'),Parameter::WHERE)) throw new ParameterWhereNotSupported();
            });

            collect($item['doc']['responses'])->each(function ($response){
                $response = collect($response);
                if (!$response->has('http_status_code')) throw new ResponseHttpStatusCodeNotFound();
                if (!$response->has('example')) throw new ResponseExampleNotFound();
            });
        });
        return $collection;
    }
}
