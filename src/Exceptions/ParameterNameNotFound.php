<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class ParameterNameNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.parameter_name_not_found');
    }
}
