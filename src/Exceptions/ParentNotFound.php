<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class ParentNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.parent_not_found');
    }
}
