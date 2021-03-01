<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization\VirtualMachine;

use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\DoesNotSupportIndexing;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\Helper;
use Krystal\Katapult\Resources\Organization\VirtualMachine;

class VirtualMachineBuild extends \Krystal\Katapult\Resources\Organization\VirtualMachine\VirtualMachineBuild implements ResourceInterface
{
    use HandlesApiActions;
    use SnakeCaseResourceName;
    use DoesNotSupportIndexing;

    public static function getUrl(string $resourceId = null, array $arguments = null): string
    {
        if ($resourceId) {
            $url = "virtual_machines/builds/{$resourceId}";
        } else {
            throw new \Exception('VirtualMachineBuild does not support fetching a multiple resources');
        }

        return \Krystal\Katapult\API\RestfulKatapultApiV1\Helper::addQueryToUrl($url, $arguments);
    }
}
