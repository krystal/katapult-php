<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources;

use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HasStandardUrls;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SupportsIndexing;
use Krystal\Katapult\Resources\Resource;

class DataCenter extends \Krystal\Katapult\Resources\DataCenter implements ResourceInterface
{
    use SnakeCaseResourceName;
    use HasStandardUrls;
    use HandlesApiActions;
    use SupportsIndexing;
}
