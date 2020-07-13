<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Traits;

trait HasStandardUrls
{
    public static function getUrl($resourceId = null, $arguments = null)
    {
        if(!$resourceId) return self::getResourceName(true);
        return self::getResourceName(true) . '/' . $resourceId;
    }
}
