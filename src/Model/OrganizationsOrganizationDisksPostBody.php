<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class OrganizationsOrganizationDisksPostBody extends \ArrayObject
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
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     *
     * @var OrganizationLookup
     */
    protected $organization;
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
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     */
    public function getOrganization(): OrganizationLookup
    {
        return $this->organization;
    }

    /**
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     */
    public function setOrganization(OrganizationLookup $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

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
