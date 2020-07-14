<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization\DNS;

use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\CanBeDeleted;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\Helper;

class DnsZone extends \Krystal\Katapult\Resources\Organization\DNS\DnsZone implements ResourceInterface
{
    use SnakeCaseResourceName;
    use HandlesApiActions;
    use CanBeDeleted;

    public static function getUrl($resourceId = null, $arguments = null)
    {
        if($resourceId)
        {
            return "dns/zones/{$resourceId}";
        }
        else
        {
            if(!is_array($arguments) || count($arguments) < 1) throw new \Exception('No arguments supplied to getUrl method');
            return 'organizations/' . Helper::pluckObject($arguments, \Krystal\Katapult\Resources\Organization::class)->id . '/dns/zones';
        }
    }
}
