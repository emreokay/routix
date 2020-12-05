<?php


namespace Emreokay\Routix\Enums;


abstract class Filter
{
    public const STARTS_WITH    = 'starts_with';
    public const CONTAINS       = 'contains';
    public const TYPES          = [self::STARTS_WITH, self::CONTAINS];
}
