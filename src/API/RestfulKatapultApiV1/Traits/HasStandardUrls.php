<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Traits;

use Krystal\Katapult\API\RestfulKatapultApiV1\Helper;

trait HasStandardUrls
{
    public static function getUrl($resourceId = null, $arguments = null)
    {
        $url = $resourceId ?  self::getResourceName(true) . '/' . $resourceId : self::getResourceName(true);
        return Helper::addQueryToUrl($url, $arguments);
    }
}
