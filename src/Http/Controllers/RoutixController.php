<?php


namespace Emreokay\Routix\Http\Controllers;


use Emreokay\Routix\Support\Facades\Browser;
use Emreokay\Routix\Support\Facades\Reader;

/**
 * @root
 * @name "okay"
 * @title "Başlangıç"
 * @description "buraya açıklama gelecek"
 * @text "Buraya detaylısı gelecek"
 * @image "deneme.png"
 */
class RoutixController
{
    /**
     * @type "method"
     */
    public function index()
    {
        dd(Reader::class()->get());
        dd(collect(json_decode(file_get_contents(storage_path('routix/routix.json'),true))));
        return view('routix::routix.index');
    }
}
