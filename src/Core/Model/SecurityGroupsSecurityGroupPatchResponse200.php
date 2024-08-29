<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class SecurityGroupsSecurityGroupPatchResponse200 extends \ArrayObject
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
     * The security group that has been updated.
     *
     * @var SecurityGroupsSecurityGroupPatchResponse200SecurityGroup
     */
    protected $securityGroup;
    /**
     * @var list<KeyValue>
     */
    protected $annotations;

    /**
     * The security group that has been updated.
     */
    public function getSecurityGroup(): SecurityGroupsSecurityGroupPatchResponse200SecurityGroup
    {
        return $this->securityGroup;
    }

    /**
     * The security group that has been updated.
     */
    public function setSecurityGroup(SecurityGroupsSecurityGroupPatchResponse200SecurityGroup $securityGroup): self
    {
        $this->initialized['securityGroup'] = true;
        $this->securityGroup = $securityGroup;

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
