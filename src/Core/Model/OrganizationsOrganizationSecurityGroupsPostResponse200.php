<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class OrganizationsOrganizationSecurityGroupsPostResponse200 extends \ArrayObject
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
     * The security group that has been created.
     *
     * @var OrganizationsOrganizationSecurityGroupsPostResponse200SecurityGroup
     */
    protected $securityGroup;
    /**
     * @var list<KeyValue>
     */
    protected $annotations;

    /**
     * The security group that has been created.
     */
    public function getSecurityGroup(): OrganizationsOrganizationSecurityGroupsPostResponse200SecurityGroup
    {
        return $this->securityGroup;
    }

    /**
     * The security group that has been created.
     */
    public function setSecurityGroup(OrganizationsOrganizationSecurityGroupsPostResponse200SecurityGroup $securityGroup): self
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
