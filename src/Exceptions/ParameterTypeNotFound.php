<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class ParameterTypeNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.parameter_type_not_found');
    }
}
