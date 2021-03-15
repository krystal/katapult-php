<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization;

use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\DoesNotSupportIndexing;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SupportsIndexing;
use Krystal\Katapult\Helper;
use Krystal\Katapult\Resources\Organization;

class DiskTemplate extends Organization\DiskTemplate implements ResourceInterface
{
    use HandlesApiActions;
    use SnakeCaseResourceName;
    use SupportsIndexing;

    public static function getUrl(string $resourceId = null, array $arguments = null): string
    {
        if ($resourceId) {
            $url = self::getResourceName(true) . '/' . $resourceId;
        } else {
            if (!is_array($arguments) || count($arguments) < 1) {
                throw new \Exception('No arguments supplied to getUrl method');
            }

            if (!isset($arguments['query'])) {
                $arguments['query'] = [];
            }

            // QOL improvement to fetch all disk templates by default.
            if (!isset($arguments['query']['include_universal'])) {
                $arguments['query']['include_universal'] = true;
            }

            $url = 'organizations/' . Helper::pluckObject($arguments, Organization::class)->id . '/' . self::getResourceName(true);
        }

        return \Krystal\Katapult\API\RestfulKatapultApiV1\Helper::addQueryToUrl($url, $arguments);
    }
}
