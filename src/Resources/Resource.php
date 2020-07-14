<?php

namespace Krystal\Katapult\Resources;

use Krystal\Katapult\API\ResourceControllerInterface;

abstract class Resource implements ResourceInterface
{
    /*
     * @var array
     */
    protected $attributes = [];

    /**
     * @var ResourceControllerInterface $resourceController
     */
    protected $resourceController;

    public static function getName()
    {
        $parts = explode('\\', get_called_class());
        return end($parts);
    }

    public function setAttributes($attributes)
    {
        $this->attributes = (array)$attributes;
        return $this;
    }

    public function setResourceController(ResourceControllerInterface $resourceController)
    {
        $this->resourceController = $resourceController;
        return $this;
    }

    public static function instantiateFromSpec($spec, ResourceControllerInterface $resourceController)
    {
        $resourceName = get_called_class();
        $resource = new $resourceName();
        return $resource->setAttributes($spec)->setResourceController($resourceController);
    }

    public function __get($name)
    {
        return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
    }
}


