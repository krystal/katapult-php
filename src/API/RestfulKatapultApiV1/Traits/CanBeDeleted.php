<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1\Traits;

trait CanBeDeleted
{
    public function delete()
    {
        return $this->resourceController->api->delete($this->resourceController->createApiUrl($this->id));
    }
}
