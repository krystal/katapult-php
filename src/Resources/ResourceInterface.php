<?php

namespace Krystal\Katapult\Resources;

interface ResourceInterface
{
    /**
     * @param \stdClass $spec
     * @return ResourceInterface
     */
    public static function instantiateFromSpec($spec);
}
