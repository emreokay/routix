<?php


namespace Emreokay\Routix\Support\Helpers;


use Emreokay\Routix\Support\Facades\Encoder;
use Emreokay\Routix\Support\Facades\Complement;
use Emreokay\Routix\Support\Facades\Sorter;
use Emreokay\Routix\Support\Facades\Browser;
use Emreokay\Routix\Support\Facades\Parser;
use Emreokay\Routix\Support\Facades\Validator;

class Reader
{
    private $type;

    private function readClasses()
    {
        return Browser::class()->get();
    }

    private function readMethods()
    {
        return Browser::method()->get();
    }

    private function class()
    {
        return $this->readClasses()->map(function ($item){
            return [
                'doc'   => Parser::get((new \ReflectionClass($item))->getDocComment()),
                'data'  => $item
            ];
        });
    }

    private function method()
    {
        return $this->readMethods()->map(function ($method){
            $class = new \ReflectionClass($method['action']);
            return [
                'doc'   => Parser::get($class->getMethod($method['func'])->getDocComment()),
                'data'  => $method
            ];
        });
    }

    /**
     * @return $this
     */
    public function type(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function get()
    {
        $result = $this->{$this->type}()->filter(function ($item){
            return !empty($item['doc']);
        })->values();
        return Sorter::{$this->type}(Complement::{$this->type}(Validator::{$this->type}(Encoder::{$this->type}($result))));
    }
}
