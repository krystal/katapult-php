<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1;

class Helper
{
    public static function addQueryToUrl($url, $arguments = null)
    {
        if($arguments && isset($arguments['query']))
        {
            $url .= '?' . http_build_query($arguments['query']);
        }

        return $url;
    }
}
