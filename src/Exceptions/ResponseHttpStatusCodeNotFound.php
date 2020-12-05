<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class ResponseHttpStatusCodeNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.response_http_status_code_not_found');
    }
}
