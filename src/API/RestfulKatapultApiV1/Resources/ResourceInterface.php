<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources;

use Krystal\Katapult\API\RestfulKatapultApiV1\ResourceController;

interface ResourceInterface
{
    public static function getUrl(string $resourceId = null, array $arguments = null);
    public static function callApiAction(ResourceController $resourceController, string $action, array $arguments);
    public static function getResourceName(bool $pluralize = false);
    public static function supportsResourceIndex(): bool;
}
