<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class SecurityGroupsSecurityGroupPatchBody extends \ArrayObject
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
     * All 'security_group[]' params are mutually exclusive, only one can be provided.
     *
     * @var SecurityGroupLookup
     */
    protected $securityGroup;
    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     *
     * @var SecurityGroupArguments
     */
    protected $properties;
    /**
     * @var list<KeyValue>
     */
    protected $annotations;

    /**
     * All 'security_group[]' params are mutually exclusive, only one can be provided.
     */
    public function getSecurityGroup(): SecurityGroupLookup
    {
        return $this->securityGroup;
    }

    /**
     * All 'security_group[]' params are mutually exclusive, only one can be provided.
     */
    public function setSecurityGroup(SecurityGroupLookup $securityGroup): self
    {
        $this->initialized['securityGroup'] = true;
        $this->securityGroup = $securityGroup;

        return $this;
    }

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function getProperties(): SecurityGroupArguments
    {
        return $this->properties;
    }

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function setProperties(SecurityGroupArguments $properties): self
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
