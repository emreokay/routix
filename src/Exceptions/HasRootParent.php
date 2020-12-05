<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class HasRootParent extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.has_root_parent');
    }
}
