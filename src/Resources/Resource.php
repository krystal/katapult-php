<?php

namespace Krystal\Katapult\Resources;

abstract class Resource implements ResourceInterface
{
    protected $attributes;

    public static function getName()
    {
        $parts = explode('\\', get_called_class());
        return end($parts);
    }

    public static function instantiateFromSpec($spec)
    {
        $resourceName = get_called_class();
        $resource = new $resourceName();
        $resource->attributes = (array)$spec;
        return $resource;
    }

    public function __get($name)
    {
        return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
    }
}


