<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization;

use GuzzleHttp\Utils as GuzzleUtils;
use Krystal\Katapult\API\RestfulKatapultApiV1\ResourceController;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization\VirtualMachine\ConsoleSession;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\CanBeDeleted;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Task;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization\VirtualMachine\VirtualMachineBuild;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SupportsIndexing;
use Krystal\Katapult\Helper;
use Krystal\Katapult\Katapult;
use Psr\Http\Message\ResponseInterface;

class VirtualMachine extends \Krystal\Katapult\Resources\Organization\VirtualMachine implements ResourceInterface
{
    use SnakeCaseResourceName;
    use HandlesApiActions;
    use CanBeDeleted;
    use SupportsIndexing;

    const ACTION_START = 'start';
    const ACTION_STOP = 'stop';
    const ACTION_SHUTDOWN = 'shutdown';
    const ACTION_RESET = 'reset';
    const ACTION_CHANGE_PACKAGE = 'change_package';

    public static function getUrl(string $resourceId = null, array $arguments = null): string
    {
        if ($resourceId) {
            $url = "virtual_machines/{$resourceId}";

            if (isset($arguments['action']) && $arguments['action']) {
                switch ($arguments['action']) {
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
        } else {
            if (!is_array($arguments) || count($arguments) < 1) {
                throw new \Exception('No arguments supplied to getUrl method');
            }

            $url = 'organizations/' . Helper::pluckObject($arguments, \Krystal\Katapult\Resources\Organization::class)->id . '/virtual_machines';
        }

        return \Krystal\Katapult\API\RestfulKatapultApiV1\Helper::addQueryToUrl($url, $arguments);
    }

    public static function callApiAction(ResourceController $resourceController, string $action, array $arguments)
    {
        switch ($action) {
            case 'build':
                $res = $resourceController->api->post($resourceController->createApiUrl() . '/build', $arguments[0]);
                $body = GuzzleUtils::jsonDecode($res->getBody());

                return (object)[
                    'task' => Task::instantiateFromSpec($body->task, $resourceController),
                    'build' => VirtualMachineBuild::instantiateFromSpec($body->build, $resourceController)
                ];

            case 'buildFromSpec':
                $res = $resourceController->api->post($resourceController->createApiUrl() . '/build_from_spec', $arguments[0]);
                $body = GuzzleUtils::jsonDecode($res->getBody());

                return (object)[
                    'task' => Task::instantiateFromSpec($body->task, $resourceController),
                    'build' => VirtualMachineBuild::instantiateFromSpec($body->build, $resourceController)
                ];
        }

        throw new \Exception('Invalid action called');
    }

    public function createConsoleSession(): ConsoleSession
    {
        return Katapult::make($this->resourceController->api)
            ->resource(\Krystal\Katapult\Resources\Organization\VirtualMachine\ConsoleSession::class, $this)
            ->create();
    }

    public function start(): ResponseInterface
    {
        return $this->resourceController->api->post($this->resourceController->createApiUrl($this->id, [
            'action' => self::ACTION_START
        ]));
    }

    public function stop(): ResponseInterface
    {
        return $this->resourceController->api->post($this->resourceController->createApiUrl($this->id, [
            'action' => self::ACTION_STOP
        ]));
    }

    public function shutdown(): ResponseInterface
    {
        return $this->resourceController->api->post($this->resourceController->createApiUrl($this->id, [
            'action' => self::ACTION_SHUTDOWN
        ]));
    }

    public function reset(): ResponseInterface
    {
        return $this->resourceController->api->post($this->resourceController->createApiUrl($this->id, [
            'action' => self::ACTION_RESET
        ]));
    }

    public function changePackage($virtualMachinePackageLookup): ResponseInterface
    {
        return $this->resourceController->api->put($this->resourceController->createApiUrl($this->id, [
            'action' => self::ACTION_CHANGE_PACKAGE
        ]), ['virtual_machine_package' => $virtualMachinePackageLookup]);
    }
}
