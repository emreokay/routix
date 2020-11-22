<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class NameNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.name_not_found');
    }
}
