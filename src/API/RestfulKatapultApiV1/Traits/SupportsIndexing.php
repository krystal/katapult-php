<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Traits;

trait SupportsIndexing
{
    public static function supportsResourceIndex(): bool
    {
        return true;
    }
}
