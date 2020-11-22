<?php


namespace Emreokay\Routix\Support\Helpers;


use Emreokay\Routix\Exceptions\KeyNotFoundException;

class Parser
{
    private $text;

    public function __construct()
    {
        $this->text = null;
    }

    public function get(string $text)
    {
        $this->text = $text;
        if (empty($this->text)){
            return null;
        }

        $this->toLine()
            ->removeCommentCharacters()
            ->createKeyValue();

        return $this->text->toArray();
    }

    private function toLine()
    {
        $this->text = collect(preg_split("/(\r?\n)/", $this->text));
        return $this;
    }

    private function removeCommentCharacters()
    {
        $this->text = $this->text->map(function ($line){
            return trim(str_replace(['/**','*/','*'],'',$line));
        })->filter()->values();
        return $this;
    }

    private function createKeyValue()
    {
        $this->text = $this->text->mapWithKeys(function ($item){
            preg_match('/@(\w+)/', $item, $matches);

            if (empty($matches)){
                throw new KeyNotFoundException();
            }

            $key = $matches[1];
            $value = str_replace("@$key ", '', $item);
            $value = trim($value,'"');

            return [$key => $value];
        });
    }
}
