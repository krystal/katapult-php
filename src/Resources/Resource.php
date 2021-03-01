<?php

namespace Krystal\Katapult\Resources;

use Krystal\Katapult\API\ResourceControllerInterface;

abstract class Resource implements ResourceInterface
{
    protected array $attributes = [];
    protected ? ResourceControllerInterface $resourceController = null;

    public static function getName(): string
    {
        $parts = explode('\\', get_called_class());

        return end($parts);
    }

    public function setAttributes(object $attributes): ResourceInterface
    {
        $this->attributes = (array)$attributes;

        return $this;
    }

    public function setResourceController(ResourceControllerInterface $resourceController): ResourceInterface
    {
        $this->resourceController = $resourceController;

        return $this;
    }

    public static function instantiateFromSpec(object $spec, ResourceControllerInterface $resourceController = null): ResourceInterface
    {
        $resourceName = get_called_class();
        $resource = new $resourceName();
        $resource->setAttributes($spec);

        // Set a controller?
        if ($resourceController) {
            $resource->setResourceController($resourceController);
        }

        return $resource;
    }

    public function __get(string $name)
    {
        return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
    }

    public function resourceIsScopedByOrganization(): bool
    {
        return strpos(get_class($this), "Krystal\Katapult\Resources\Organization\\") === 0;
    }
}
