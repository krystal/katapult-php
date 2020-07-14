<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization\VirtualMachine;

use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\Helper;
use Krystal\Katapult\Resources\Organization\VirtualMachine;

class ConsoleSession extends \Krystal\Katapult\Resources\Organization\VirtualMachine\ConsoleSession implements ResourceInterface
{
    use HandlesApiActions;
    use SnakeCaseResourceName;

    public static function getUrl($resourceId = null, $arguments = null)
    {
        if($resourceId)
        {
            throw new \Exception('ConsoleSession does not support fetching a single resource');
        }
        else
        {
            if(!is_array($arguments) || count($arguments) < 1) throw new \Exception('No arguments supplied to getUrl method');
            return 'virtual_machines/' . Helper::pluckObject($arguments, VirtualMachine::class)->id . '/console_sessions';
        }
    }
}
