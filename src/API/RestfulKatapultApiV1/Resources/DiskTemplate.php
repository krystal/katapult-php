<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources;

use Krystal\Katapult\API\RestfulKatapultApiV1\ResourceController;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HasStandardUrls;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\Helper;

class DiskTemplate extends \Krystal\Katapult\Resources\DiskTemplate implements ResourceInterface
{
    use HandlesApiActions;
    use SnakeCaseResourceName;

    public static function getUrl($resourceId = null, $arguments = null)
    {
        if($resourceId)
        {
            throw new \Exception('DiskTemplate does not support fetching a single resource');
        }
        else
        {
            if(!is_array($arguments) || count($arguments) < 1) throw new \Exception('No arguments supplied to getUrl method');
            $url = 'organizations/' . Helper::pluckObject($arguments, \Krystal\Katapult\Resources\Organization::class)->id . '/disk_templates';
        }

        // Default us to include universal templates
        if(!isset($arguments['query'])) $arguments['query'] = [];
        if(!isset($arguments['query']['include_universal'])) $arguments['query']['include_universal'] = true;

        return \Krystal\Katapult\API\RestfulKatapultApiV1\Helper::addQueryToUrl($url, $arguments);
    }
}
