<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization;

use Krystal\Katapult\API\RestfulKatapultApiV1\ResourceController;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\CanBeDeleted;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Task;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\VirtualMachineBuild;
use Krystal\Katapult\Helper;

class VirtualMachine extends \Krystal\Katapult\Resources\Organization\VirtualMachine implements ResourceInterface
{
    use SnakeCaseResourceName;
    use HandlesApiActions;
    use CanBeDeleted;

    public static function getUrl($resourceId = null, $arguments = null)
    {
        if($resourceId)
        {
            return "virtual_machines/{$resourceId}";
        }
        else
        {
            if(!is_array($arguments) || count($arguments) < 1) throw new \Exception('No arguments supplied to getUrl method');
            return 'organizations/' . Helper::pluckObject($arguments, \Krystal\Katapult\Resources\Organization::class)->id . '/virtual_machines';
        }
    }

    public static function callApiAction(ResourceController $resourceController, $action, $arguments)
    {
        switch($action)
        {
            case 'build':
                $res = $resourceController->api->post($resourceController->createApiUrl() . '/build', $arguments[0]);
                $body = \GuzzleHttp\json_decode($res->getBody());

                return (object)[
                    'task' => Task::instantiateFromSpec($body->task, $resourceController),
                    'build' => VirtualMachineBuild::instantiateFromSpec($body->build, $resourceController)
                ];

            case 'buildFromSpec':
                $res = $resourceController->api->post($resourceController->createApiUrl() . '/build_from_spec', $arguments[0]);
                $body = \GuzzleHttp\json_decode($res->getBody());

                return (object)[
                    'task' => Task::instantiateFromSpec($body->task, $resourceController),
                    'build' => VirtualMachineBuild::instantiateFromSpec($body->build, $resourceController)
                ];
        }

        throw new \Exception('Invalid action called');
    }
}
