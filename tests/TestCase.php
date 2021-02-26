<?php

namespace Krystal\Katapult\Tests;

use Krystal\Katapult\Helper;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

abstract class TestCase extends PHPUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    protected function hasTrait(string $trait): bool
    {
        return Helper::classUsesTrait($this, $trait);
    }

    protected static function randomString(): string
    {
        return md5(microtime() . mt_rand());
    }
}

