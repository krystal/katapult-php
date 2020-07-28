<?php

namespace Krystal\Katapult;

class Helper
{
    /**
     * @param $value
     * @param string $delimiter
     * @return string
     *
     * Sourced from Laravel Illuminate Str helper: \Illuminate\Support\Str::snake
     */
    public static function snakeCase($value, $delimiter = '_')
    {
        $value = preg_replace('/\s+/u', '', $value);
        return strtolower(preg_replace('/(.)(?=[A-Z])/u', '$1'.$delimiter, $value));
    }

    /**
     * Replace the first occurrence of a given value in the string.
     *
     * @param  string  $search
     * @param  string  $replace
     * @param  string  $subject
     * @return string
     * Sourced from Laravel Illuminate Str helper: \Illuminate\Support\Str::replaceFirst
     */
    public static function strReplaceFirst($search, $replace, $subject)
    {
        $position = strpos($subject, $search);

        if ($position !== false) {
            return substr_replace($subject, $replace, $position, strlen($search));
        }

        return $subject;
    }

    public static function pluckObject($from, $class, $throwException = true)
    {
        foreach($from as $item)
        {
            if(is_a($item, $class)) return $item;
        }

        if($throwException) throw new \Exception('Could not pluck object: ' . $class);

        return null;
    }
}
