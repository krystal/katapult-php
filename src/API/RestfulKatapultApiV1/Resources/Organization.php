<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources;

use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HasStandardUrls;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;

class Organization extends \Krystal\Katapult\Resources\Organization implements ResourceInterface
{
    use SnakeCaseResourceName;
    use HasStandardUrls;
    use HandlesApiActions;
}

