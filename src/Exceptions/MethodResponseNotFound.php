<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class MethodResponseNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.method_response_not_found');
    }
}
