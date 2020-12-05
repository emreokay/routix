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
            preg_match('/@(\w+-?\d?)/', $item, $matches);

            if (empty($matches)){
                throw new KeyNotFoundException();
            }

            $key = $matches[1];
            $value = str_replace(["@$key","@$key "], '', $item);
            $value = trim(trim($value,'"'));
            $value = $key == 'parent' && empty($value) ? null : $value;
            $value = $key != 'parent' && empty($value) ? true : $value;
            $value = trim(trim($value,'"'));
            $value = $value == "1" ? true : $value;

            return [$key => $value];
        });
    }
}
