<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class KeyNotFoundException extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.key_not_fount');
    }
}
