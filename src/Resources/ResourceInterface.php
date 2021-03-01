<?php

namespace Krystal\Katapult\Resources;

use Krystal\Katapult\API\ResourceControllerInterface;

interface ResourceInterface
{
    public static function instantiateFromSpec(object $spec, ResourceControllerInterface $resourceController): ResourceInterface;
    public function setAttributes(object $attributes): ResourceInterface;
    public function setResourceController(ResourceControllerInterface $resourceController): ResourceInterface;
    public function resourceIsScopedByOrganization(): bool;
}
