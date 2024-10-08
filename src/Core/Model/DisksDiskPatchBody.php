<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DisksDiskPatchBody extends \ArrayObject
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
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     *
     * @var DiskArguments
     */
    protected $properties;
    /**
     * @var list<KeyValue>
     */
    protected $annotations;

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

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function getProperties(): DiskArguments
    {
        return $this->properties;
    }

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function setProperties(DiskArguments $properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return list<KeyValue>
     */
    public function getAnnotations(): array
    {
        return $this->annotations;
    }

    /**
     * @param list<KeyValue> $annotations
     */
    public function setAnnotations(array $annotations): self
    {
        $this->initialized['annotations'] = true;
        $this->annotations = $annotations;

        return $this;
    }
}
