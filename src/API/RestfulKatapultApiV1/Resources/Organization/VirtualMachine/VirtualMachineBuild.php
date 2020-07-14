<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization\VirtualMachine;

use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\Helper;
use Krystal\Katapult\Resources\Organization\VirtualMachine;

class VirtualMachineBuild extends \Krystal\Katapult\Resources\Organization\VirtualMachine\VirtualMachineBuild implements ResourceInterface
{
    use HandlesApiActions;
    use SnakeCaseResourceName;

    public static function getUrl($resourceId = null, $arguments = null)
    {
        if($resourceId)
        {
            return "virtual_machines/builds/{$resourceId}";
        }
        else
        {
            throw new \Exception('VirtualMachineBuild does not support fetching a multiple resources');
        }
    }
}
