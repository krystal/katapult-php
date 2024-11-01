<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class ObjectStorageObjectStorageClusterBucketsBucketObjectGetResponse200 extends \ArrayObject
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
     * @var ObjectStorageObject
     */
    protected $objectDetails;

    public function getObjectDetails(): ObjectStorageObject
    {
        return $this->objectDetails;
    }

    public function setObjectDetails(ObjectStorageObject $objectDetails): self
    {
        $this->initialized['objectDetails'] = true;
        $this->objectDetails = $objectDetails;

        return $this;
    }
}