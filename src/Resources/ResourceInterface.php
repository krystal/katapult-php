<?php

namespace Krystal\Katapult\Resources;

use Krystal\Katapult\API\ResourceControllerInterface;

interface ResourceInterface
{
    /**
     * @param \stdClass $spec
     * @param ResourceControllerInterface $resourceController
     * @return ResourceInterface
     */
    public static function instantiateFromSpec($spec, ResourceControllerInterface $resourceController);

    /**
     * @param $attributes
     * @return ResourceInterface
     */
    public function setAttributes($attributes);

    /**
     * @param ResourceControllerInterface $resourceController
     * @return ResourceInterface
     */
    public function setResourceController(ResourceControllerInterface $resourceController);

    public function resourceIsScopedByOrganization(): bool;
}
