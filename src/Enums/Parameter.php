<?php


namespace Emreokay\Routix\Enums;


abstract class Parameter
{
    public const MUST       = ['required','optional'];
    public const WHERE      = ['query','body'];
}
