<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization\VirtualMachine;

use Exception;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\DoesNotSupportIndexing;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\Helper;
use Krystal\Katapult\Resources\Organization\VirtualMachine;

class ConsoleSession extends VirtualMachine\ConsoleSession implements ResourceInterface
{
    use HandlesApiActions;
    use SnakeCaseResourceName;
    use DoesNotSupportIndexing;

    public static function getUrl(string $resourceId = null, array $arguments = null): string
    {
        if ($resourceId) {
            throw new Exception('ConsoleSession does not support fetching a single resource');
        } else {
            if (!is_array($arguments) || count($arguments) < 1) {
                throw new Exception('No arguments supplied to getUrl method');
            }

            $url = 'virtual_machines/' . Helper::pluckObject($arguments, VirtualMachine::class)->id . '/console_sessions';
        }

        return \Krystal\Katapult\API\RestfulKatapultApiV1\Helper::addQueryToUrl($url, $arguments);
    }
}
