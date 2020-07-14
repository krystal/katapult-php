<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Resources;

use Krystal\Katapult\API\RestfulKatapultApiV1\ResourceController;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HandlesApiActions;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\HasStandardUrls;
use Krystal\Katapult\API\RestfulKatapultApiV1\Traits\SnakeCaseResourceName;
use Krystal\Katapult\Helper;
use Krystal\Katapult\Katapult;

class Organization extends \Krystal\Katapult\Resources\Organization implements ResourceInterface
{
    use SnakeCaseResourceName;
    use HandlesApiActions;
    use HasStandardUrls;

    /**
     * @return Organization\ManagedOrganization
     */
    public function createManagedOrganisation()
    {
        return Katapult::make($this->resourceController->api)->resource(\Krystal\Katapult\Resources\Organization\ManagedOrganization::class, $this)->create();
    }
}

