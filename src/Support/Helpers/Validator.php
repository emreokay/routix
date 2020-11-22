<?php


namespace Emreokay\Routix\Support\Helpers;


use Emreokay\Routix\Exceptions\DescriptionNotFound;
use Emreokay\Routix\Exceptions\NameNotFound;
use Emreokay\Routix\Exceptions\ParentNotFound;
use Emreokay\Routix\Exceptions\RootMultiple;
use Emreokay\Routix\Exceptions\RootNotFound;
use Emreokay\Routix\Exceptions\TextNotFound;
use Emreokay\Routix\Exceptions\TitleNotFound;
use Illuminate\Support\Collection;

class Validator
{
    public function class(Collection $collection)
    {
        $collection->each(function ($item){
            $item = collect($item);
            if($item->has('parent') && empty($item->get('parent')) && !$item->has('root'))throw new ParentNotFound();
            if(!$item->has('parent') && !$item->has('root')) throw new ParentNotFound();
            if(!$item->has('name')) throw new NameNotFound();
            if(!$item->has('title')) throw new TitleNotFound();
            if(!$item->has('description')) throw new DescriptionNotFound();
            if(!$item->has('text')) throw new TextNotFound();
        });

        if ($collection->sum('root') < 1){
            throw new RootNotFound();
        }

        if ($collection->sum('root') > 1){
            throw new RootMultiple();
        }

        dd($collection);
    }

    public function method(Collection $collection)
    {
        dd($collection);
    }
}
