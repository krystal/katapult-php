<?php

declare(strict_types=1);

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization\VirtualMachine;

use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\ResourceInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\CanBeDeleted;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\DoesNotSupportIndexing;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SupportsIndexing;
use Krystal\Katapult\Helper;

class VirtualMachineDiskBackupPolicy extends \Krystal\Katapult\Resources\Organization\VirtualMachine\VirtualMachineDiskBackupPolicy implements ResourceInterface
{
    use HandlesApiActions;
    use CanBeDeleted;
    use SnakeCaseResourceName;
    use SupportsIndexing;

    public static function getUrl(string $resourceId = null, array $arguments = null): string
    {
        if ($resourceId) {
            $url = "disk_backup_policies/{$resourceId}";
        } else {
            $vmId = Helper::pluckObject($arguments, \Krystal\Katapult\Resources\Organization\VirtualMachine::class)->id;
            $url = "virtual_machines/{$vmId}/disk_backup_policies";
        }

        return \Krystal\Katapult\API\RestfulKatapultApiV1\Helper::addQueryToUrl($url, $arguments);
    }

    public static function getResourceName(bool $pluralize = false): string
    {
        return 'disk_backup_policies';
    }
}
