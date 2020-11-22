<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class RootNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.root_not_found');
    }
}
