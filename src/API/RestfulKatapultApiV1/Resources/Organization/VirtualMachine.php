<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization;

use Krystal\Katapult\API\RestfulKatapultApiV1\ResourceController;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\Helper;
use Krystal\Katapult\Resources\Task;
use Krystal\Katapult\Resources\VirtualMachineBuild;

class VirtualMachine extends \Krystal\Katapult\Resources\Organization\VirtualMachine implements ResourceInterface
{
    use SnakeCaseResourceName;
    use HandlesApiActions;

    public static function getUrl($resourceId = null, $arguments = null)
    {
        if(!is_array($arguments) || count($arguments) < 1) throw new \Exception('No arguments supplied to getUrl method');

        $baseUrl = 'organizations/' . Helper::pluckObject($arguments, \Krystal\Katapult\Resources\Organization::class)->id . '/virtual_machines';

        if(!$resourceId) return $baseUrl;
        return $baseUrl . '/' . $resourceId;
    }

    public static function callApiAction(ResourceController $resourceController, $action, $arguments)
    {
        switch($action)
        {
            case 'build':
                $res = $resourceController->api->post($resourceController->createApiUrl() . '/build', $arguments[0]);
                $body = \GuzzleHttp\json_decode($res->getBody());

                return (object)[
                    'task' => Task::instantiateFromSpec($body->task),
                    'build' => VirtualMachineBuild::instantiateFromSpec($body->build)
                ];
        }

        throw new \Exception('Invalid action called');
    }
}
