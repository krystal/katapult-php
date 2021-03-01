<?php

namespace Krystal\Katapult\Resources\Organization;

use Krystal\Katapult\Resources\Resource;

class ManagedOrganization extends Resource
{
    public static function getName(): string
    {
        // ManagedOrganization is essentially a facade of Organization
        return 'Organization';
    }
}
