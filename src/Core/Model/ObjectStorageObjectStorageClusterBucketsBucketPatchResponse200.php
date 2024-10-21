<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class ObjectStorageObjectStorageClusterBucketsBucketPatchResponse200 extends \ArrayObject
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
     * @var ObjectStorageBucket
     */
    protected $objectStorageBucket;

    public function getObjectStorageBucket(): ObjectStorageBucket
    {
        return $this->objectStorageBucket;
    }

    public function setObjectStorageBucket(ObjectStorageBucket $objectStorageBucket): self
    {
        $this->initialized['objectStorageBucket'] = true;
        $this->objectStorageBucket = $objectStorageBucket;

        return $this;
    }
}
