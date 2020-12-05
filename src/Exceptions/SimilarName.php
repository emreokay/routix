<?php


namespace Emreokay\Routix\Exceptions;


use Exception;

class SimilarName extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        $this->message = trans('routix::exceptions.similar_name');
    }
}
