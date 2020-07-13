<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources;

use Krystal\Katapult\API\RestfulKatapultApiV1\ResourceController;

interface ResourceInterface
{
    public static function getUrl($resourceId = null, $arguments = null);
    public static function callApiAction(ResourceController $resourceController, $action, $arguments);
}
