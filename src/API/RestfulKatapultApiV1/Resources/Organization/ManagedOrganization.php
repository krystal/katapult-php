<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization;

use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\DoesNotSupportIndexing;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\Helper;
use Krystal\Katapult\Resources\Organization;

class ManagedOrganization extends Organization\ManagedOrganization implements ResourceInterface
{
    use HandlesApiActions;
    use SnakeCaseResourceName;
    use DoesNotSupportIndexing;

    public static function getUrl($resourceId = null, $arguments = null)
    {
        if ($resourceId) {
            throw new \Exception('ManagedOrganization does not support fetching a single resource');
        } else {
            if (!is_array($arguments) || count($arguments) < 1) {
                throw new \Exception('No arguments supplied to getUrl method');
            }
            $url = 'organizations/' . Helper::pluckObject($arguments, Organization::class)->id . '/managed';
        }

        return \Krystal\Katapult\API\RestfulKatapultApiV1\Helper::addQueryToUrl($url, $arguments);
    }
}
