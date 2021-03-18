<?php

namespace Krystal\Katapult\Tests;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Krystal\Katapult\API\RestfulKatapultApiV1;
use Krystal\Katapult\Katapult;
use Krystal\Katapult\Resources\DataCenter;
use Psr\Http\Message\RequestInterface;

class MiddlewareTest extends TestCase
{
    public function testMiddlewareIsInvokedWithConstructor()
    {
        $handlerStack = HandlerStack::create();

        $middlewareCalled = false;

        $handlerStack->push(Middleware::mapRequest(function(RequestInterface $request) use(&$middlewareCalled) {
            $middlewareCalled = true;
            return $request;
        }));

        $katapultApi = new RestfulKatapultApiV1(
            getenv('KATAPULT_API_TOKEN'), true, $handlerStack
        );

        $katapult = Katapult::make($katapultApi);

        $katapult->resource(DataCenter::class)->first();

        $this->assertTrue($middlewareCalled);
    }

    public function testMiddlewareIsInvokedWhenRebuilt()
    {
        $handlerStack = HandlerStack::create();

        $middlewareCalled = false;

        $handlerStack->push(Middleware::mapRequest(function(RequestInterface $request) use(&$middlewareCalled) {
            $middlewareCalled = true;
            return $request;
        }));

        $katapultApi = new RestfulKatapultApiV1(
            getenv('KATAPULT_API_TOKEN')
        );

        $katapultApi->rebuildClient($handlerStack);

        $katapult = Katapult::make($katapultApi);

        $katapult->resource(DataCenter::class)->first();

        $this->assertTrue($middlewareCalled);
    }
}

