<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class TextNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.text_not_found');
    }
}
