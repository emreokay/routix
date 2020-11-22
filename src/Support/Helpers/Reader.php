<?php


namespace Emreokay\Routix\Support\Helpers;


use Emreokay\Routix\Support\Facades\Browser;
use Emreokay\Routix\Support\Facades\Parser;
use Emreokay\Routix\Support\Facades\Validator;

class Reader
{
    private $browser;
    private $type;

    public function __construct()
    {
        $this->browser = Browser::all();
    }

    private function readClasses()
    {
        return $this->browser->map(function ($item){
            return new \ReflectionClass($item['action']);
        });
    }

    private function readMethods(\ReflectionClass $rc)
    {
        return $rc->getMethods();
    }

    private function getClassDoc(\ReflectionClass $rc)
    {
        return Parser::get($rc->getDocComment());
    }

    private function getMethodDoc(\ReflectionClass $rc)
    {
        return collect($this->readMethods($rc))->map(function ($method) use ($rc){
            return Parser::get($rc->getMethod($method->getName())->getDocComment());
        })->filter()->toArray();
    }

    /**
     * @return $this
     */
    public function class(): self
    {
        $this->type = "class";
        return $this;
    }

    /**
     * @return $this
     */
    public function method(): self
    {
        $this->type = "method";
        return $this;
    }

    public function get()
    {
        $result = $this->readClasses()->map(function ($rc){
            return [
                'class'   => $this->getClassDoc($rc),
                'method' => $this->getMethodDoc($rc)
            ];
        })->pluck($this->type)->filter()->values();

        return Validator::{$this->type}($result);
    }
}
