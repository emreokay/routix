<?php


namespace Emreokay\Routix\Support\Helpers;


use Emreokay\Routix\Support\Facades\Browser;
use Emreokay\Routix\Support\Facades\Parser;

class Reader
{
    private $browser;

    public function __construct()
    {
        $this->browser = Browser::all();
    }

    private function classes()
    {
        return $this->browser->map(function ($item){
            return new \ReflectionClass($item['action']);
        });
    }

    private function methods(\ReflectionClass $rc)
    {
        return $rc->getMethods();
    }

    private function getClassDoc(\ReflectionClass $rc)
    {
        return Parser::get($rc->getDocComment());
    }

    private function getMethodDoc(\ReflectionClass $rc)
    {
        return collect($this->methods($rc))->map(function ($method) use ($rc){
            return Parser::get($rc->getMethod($method->getName())->getDocComment());
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
