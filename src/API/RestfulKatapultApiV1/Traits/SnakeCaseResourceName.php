<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Traits;

use Krystal\Katapult\Helper;

trait SnakeCaseResourceName
{
    public static function getResourceName(bool $pluralize = false): string
    {
        $name = Helper::snakeCase(self::getName());

        if ($pluralize) {
            $name .= 's';
        }

        return $name;
    }
}
