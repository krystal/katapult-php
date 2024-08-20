<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DisksDiskDeleteBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * All 'disk[]' params are mutually exclusive, only one can be provided.
     *
     * @var DiskLookup
     */
    protected $disk;

    /**
     * All 'disk[]' params are mutually exclusive, only one can be provided.
     */
    public function getDisk(): DiskLookup
    {
        return $this->disk;
    }

    /**
     * All 'disk[]' params are mutually exclusive, only one can be provided.
     */
    public function setDisk(DiskLookup $disk): self
    {
        $this->initialized['disk'] = true;
        $this->disk = $disk;

        return $this;
    }
}
