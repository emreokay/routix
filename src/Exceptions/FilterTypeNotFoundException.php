<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class FilterTypeNotFoundException extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.filter_type_not_found');
    }
}
