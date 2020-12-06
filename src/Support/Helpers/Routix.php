<?php


namespace Emreokay\Routix\Support\Helpers;


use Emreokay\Routix\Support\Facades\Assignment;

class Routix
{
    private $path;
    private $data;

    public function __construct()
    {
        $this->path = storage_path('routix/routix.json');
        $this->data = Assignment::generate();
        $this->data = json_encode($this->data,JSON_PRETTY_PRINT);
        $this->data = utf8_encode($this->data);
    }

    public function write()
    {
        return file_put_contents($this->path,$this->data);
    }

    public function read()
    {
        return collect(json_decode(file_get_contents($this->path)))->first();
    }
}
