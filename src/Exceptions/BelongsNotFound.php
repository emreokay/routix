<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class BelongsNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.belongs_not_found');
    }
}
