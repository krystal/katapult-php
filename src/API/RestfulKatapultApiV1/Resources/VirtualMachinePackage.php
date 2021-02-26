<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources;

use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HasStandardUrls;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SupportsIndexing;

class VirtualMachinePackage extends \Krystal\Katapult\Resources\VirtualMachinePackage implements ResourceInterface
{
    use HandlesApiActions;
    use HasStandardUrls;
    use SnakeCaseResourceName;
    use SupportsIndexing;
}
