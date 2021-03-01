<?php

namespace Krystal\Katapult;

class Helper
{
    /**
     * @note Sourced from Laravel Illuminate Str helper: \Illuminate\Support\Str::snake
     */
    public static function snakeCase($value, $delimiter = '_')
    {
        $value = preg_replace('/\s+/u', '', $value);
        return strtolower(preg_replace('/(.)(?=[A-Z])/u', '$1'.$delimiter, $value));
    }

    public static function pluckObject($from, $class, $throwException = true)
    {
        foreach ($from as $item) {
            if (is_a($item, $class)) {
                return $item;
            }
        }

        if ($throwException) {
            throw new \Exception('Could not pluck object: ' . $class);
        }

        return null;
    }

    public static function classUsesTrait($class, string $trait): bool
    {
        return in_array($trait, class_uses($class));
    }
}
