<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class ResponseExampleNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.response_example_not_found');
    }
}
