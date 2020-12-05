<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class MethodDescriptionNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.method_description_not_found');
    }
}
