<?php


namespace Emreokay\Routix\Support\Helpers;


use Emreokay\Routix\Support\Facades\Browser;

class Reader
{
    private function classes()
    {
        return Browser::all()->map(function ($item){
            return new \ReflectionClass($item['action']);
        });
    }

    private function methods(\ReflectionClass $rc)
    {
        return $rc->getMethods();
    }

    private function getClassDoc(\ReflectionClass $rc)
    {
        return $rc->getDocComment();
    }

    private function getMethodDoc(\ReflectionClass $rc)
    {
        return collect($this->methods($rc))->map(function ($method) use ($rc){
            return $rc->getMethod($method->getName())->getDocComment();
        })->filter()->toArray();
    }

    public function all()
    {
        return $this->classes()->map(function ($rc){
            return [
                'class'   => $this->getClassDoc($rc),
                'methods' => $this->getMethodDoc($rc)
            ];
        });
    }
}
