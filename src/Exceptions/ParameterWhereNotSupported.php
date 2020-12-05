<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class ParameterWhereNotSupported extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.parameter_where_not_supported');
    }
}
