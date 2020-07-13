<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Traits;

use Krystal\Katapult\API\RestfulKatapultApiV1\ResourceController;

trait HandlesApiActions
{
    public static function callApiAction(ResourceController $resourceController, $action, $arguments)
    {
        throw new \Exception('No custom actions have been defined on this resource');
    }
}

