<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization;

use Krystal\Katapult\API\RestfulKatapultApiV1\ResourceController;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization\VirtualMachine\ConsoleSession;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\CanBeDeleted;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Task;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization\VirtualMachine\VirtualMachineBuild;
use Krystal\Katapult\Helper;
use Krystal\Katapult\Katapult;

/**
 * Class VirtualMachine
 * @package Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization
 *
 * @property-read string $management_url
 */
class VirtualMachine extends \Krystal\Katapult\Resources\Organization\VirtualMachine implements ResourceInterface
{
    use SnakeCaseResourceName;
    use HandlesApiActions;
    use CanBeDeleted;

    const ACTION_START = 'start';
    const ACTION_STOP = 'stop';
    const ACTION_SHUTDOWN = 'shutdown';
    const ACTION_RESET = 'reset';
    const ACTION_CHANGE_PACKAGE = 'change_package';

    public static function getUrl($resourceId = null, $arguments = null)
    {
        if($resourceId)
        {
            $url = "virtual_machines/{$resourceId}";

            if(isset($arguments['action']) && $arguments['action'])
            {
                switch($arguments['action'])
                {
                    case self::ACTION_START:
                        $url .= "/start";
                        break;

                    case self::ACTION_SHUTDOWN:
                        $url .= "/shutdown";
                        break;

                    case self::ACTION_STOP:
                        $url .= "/stop";
                        break;

                    case self::ACTION_RESET:
                        $url .= "/reset";
                        break;

                    case self::ACTION_CHANGE_PACKAGE:
                        $url .= "/package";
                        break;
                }
            }
        }
        else
        {
            if(!is_array($arguments) || count($arguments) < 1) throw new \Exception('No arguments supplied to getUrl method');
            $url = 'organizations/' . Helper::pluckObject($arguments, \Krystal\Katapult\Resources\Organization::class)->id . '/virtual_machines';
        }

        return \Krystal\Katapult\API\RestfulKatapultApiV1\Helper::addQueryToUrl($url, $arguments);
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

    /**
     * @return ConsoleSession
     */
    public function createConsoleSession()
    {
        return Katapult::make($this->resourceController->api)->resource(\Krystal\Katapult\Resources\Organization\VirtualMachine\ConsoleSession::class, $this)->create();
    }

    /**
     * @return Task
     */
    public function start()
    {
        $res = $this->resourceController->api->post($this->resourceController->createApiUrl($this->id, [
            'action' => self::ACTION_START
        ]));

        return Task::instantiateFromSpec(\GuzzleHttp\json_decode($res->getBody())->task, $this->resourceController);
    }

    /**
     * @return Task
     */
    public function stop()
    {
        $res = $this->resourceController->api->post($this->resourceController->createApiUrl($this->id, [
            'action' => self::ACTION_STOP
        ]));

        return Task::instantiateFromSpec(\GuzzleHttp\json_decode($res->getBody())->task, $this->resourceController);
    }

    /**
     * @return Task
     */
    public function shutdown()
    {
        $res = $this->resourceController->api->post($this->resourceController->createApiUrl($this->id, [
            'action' => self::ACTION_SHUTDOWN
        ]));

        return Task::instantiateFromSpec(\GuzzleHttp\json_decode($res->getBody())->task, $this->resourceController);
    }

    /**
     * @return Task
     */
    public function reset()
    {
        $res = $this->resourceController->api->post($this->resourceController->createApiUrl($this->id, [
            'action' => self::ACTION_RESET
        ]));

        return Task::instantiateFromSpec(\GuzzleHttp\json_decode($res->getBody())->task, $this->resourceController);
    }

    /**
     * @return Task
     */
    public function changePackage($virtualMachinePackageLookup)
    {
        $res = $this->resourceController->api->put($this->resourceController->createApiUrl($this->id, [
            'action' => self::ACTION_CHANGE_PACKAGE
        ]), ['virtual_machine_package' => $virtualMachinePackageLookup]);

        return Task::instantiateFromSpec(\GuzzleHttp\json_decode($res->getBody())->task, $this->resourceController);
    }

    /**
     * @param array $resources
     * @return Task
     */
    public function changeFlexibleResources($resources)
    {
        $res = $this->resourceController->api->put($this->resourceController->createApiUrl($this->id) . '/flexible_resources', [
            'resources' => $resources
        ]);

        return Task::instantiateFromSpec(\GuzzleHttp\json_decode($res->getBody())->task, $this->resourceController);
    }

    /**
     * @return string
     */
    public function getProperty_management_url()
    {
        $apiHost = parse_url($this->resourceController->api->getEndpoint(), \PHP_URL_HOST);
        $managementHost = Helper::strReplaceFirst('api.', 'my.', $apiHost);
        echo $managementHost;
        return "https://{$managementHost}/o/{$this->organization->sub_domain}/virtual_machines/{$this->id}";
    }
}

