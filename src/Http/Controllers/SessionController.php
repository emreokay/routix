<?php


namespace Emreokay\Routix\Http\Controllers;


class SessionController
{
    public function index()
    {
        return view('routix::routix.login');
    }

    public function store()
    {
        dd('login.post');
    }

    public function destroy()
    {
        dd('logout');
    }
}
