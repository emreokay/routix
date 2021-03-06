<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class TitleNotFound extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.title_not_found');
    }
}
