<?php


namespace Emreokay\Routix\Http\Controllers;


use Emreokay\Routix\Support\Facades\Browser;
use Emreokay\Routix\Support\Facades\Reader;

/**
 * @routix
 * @group {"emre": "okay"}
 * @type "controller"
 * @int 15645
 */
class RoutixController
{
    /**
     * @group {"emre": "okay"}
     * @type "method"
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('routix::routix.index');
    }
}
