<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class ParameterMustNotSupported extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.parameter_must_not_supported');
    }
}
