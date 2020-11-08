<?php


namespace Emreokay\Routix\Http\Controllers;


use Emreokay\Routix\Support\Facades\Browser;
use Emreokay\Routix\Support\Facades\Reader;

/**
 * @group: {"emre": "okay"}
 * @type: "class"
 */
class RoutixController
{
    /**
     * @type: "method"
     */
    public function index()
    {
        $reader = Reader::all();
        dd($reader);
        return view('routix::routix.index');
    }
}
