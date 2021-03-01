<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Traits;

use Krystal\Katapult\API\RestfulKatapultApiV1\Helper;

trait HasStandardUrls
{
    public static function getUrl(string $resourceId = null, array $arguments = null): string
    {
        $url = $resourceId ?  self::getResourceName(true) . '/' . $resourceId : self::getResourceName(true);

        return Helper::addQueryToUrl($url, $arguments);
    }
}
