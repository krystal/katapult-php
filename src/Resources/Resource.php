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
     * @var ResourceControllerInterface|null $resourceController
     */
    protected $resourceController = null;

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

    public static function instantiateFromSpec($spec, ResourceControllerInterface $resourceController = null)
    {
        $resourceName = get_called_class();
        $resource = new $resourceName();
        $resource->setAttributes($spec);

        // Set a controller?
        if($resourceController) $resource->setResourceController($resourceController);

        return $resource;
    }

    public function __get($name)
    {
        return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
    }

    public function resourceIsScopedByOrganization(): bool
    {
        return strpos(get_class($this), "Krystal\Katapult\Resources\Organization\\") === 0;
    }
}


