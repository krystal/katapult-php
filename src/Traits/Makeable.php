<?php

namespace Krystal\Katapult\Traits;

trait Makeable
{
    /**
     * @param mixed ...$arguments
     * @return static
     */
    public static function make(...$arguments)
    {
        return new static(...$arguments);
    }
}
