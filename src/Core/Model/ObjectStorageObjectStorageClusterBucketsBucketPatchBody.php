<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class ObjectStorageObjectStorageClusterBucketsBucketPatchBody extends \ArrayObject
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
     * All 'object_storage_cluster[]' params are mutually exclusive, only one can be provided.
     *
     * @var ObjectStorageClusterLookup
     */
    protected $objectStorageCluster;
    /**
     * All 'bucket[]' params are mutually exclusive, only one can be provided.
     *
     * @var ObjectStorageBucketLookup
     */
    protected $bucket;
    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     *
     * @var ObjectStorageBucketArguments
     */
    protected $properties;

    /**
     * All 'object_storage_cluster[]' params are mutually exclusive, only one can be provided.
     */
    public function getObjectStorageCluster(): ObjectStorageClusterLookup
    {
        return $this->objectStorageCluster;
    }

    /**
     * All 'object_storage_cluster[]' params are mutually exclusive, only one can be provided.
     */
    public function setObjectStorageCluster(ObjectStorageClusterLookup $objectStorageCluster): self
    {
        $this->initialized['objectStorageCluster'] = true;
        $this->objectStorageCluster = $objectStorageCluster;

        return $this;
    }

    /**
     * All 'bucket[]' params are mutually exclusive, only one can be provided.
     */
    public function getBucket(): ObjectStorageBucketLookup
    {
        return $this->bucket;
    }

    /**
     * All 'bucket[]' params are mutually exclusive, only one can be provided.
     */
    public function setBucket(ObjectStorageBucketLookup $bucket): self
    {
        $this->initialized['bucket'] = true;
        $this->bucket = $bucket;

        return $this;
    }

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function getProperties(): ObjectStorageBucketArguments
    {
        return $this->properties;
    }

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function setProperties(ObjectStorageBucketArguments $properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;

        return $this;
    }
}
