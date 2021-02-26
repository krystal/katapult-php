<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Traits;

trait DoesNotSupportIndexing
{
    public static function supportsResourceIndex(): bool
    {
        return false;
    }
}
