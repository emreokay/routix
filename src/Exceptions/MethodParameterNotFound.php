<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class MethodParameterNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.method_parameter_not_found');
    }
}
