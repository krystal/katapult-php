<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class OrganizationsOrganizationSecurityGroupsGetResponse200 extends \ArrayObject
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
     * @var OrganizationsOrganizationSecurityGroupsGetResponse200Pagination
     */
    protected $pagination;
    /**
     * The security groups owned by this organization.
     *
     * @var SecurityGroup[]
     */
    protected $securityGroups;

    public function getPagination(): OrganizationsOrganizationSecurityGroupsGetResponse200Pagination
    {
        return $this->pagination;
    }

    public function setPagination(OrganizationsOrganizationSecurityGroupsGetResponse200Pagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * The security groups owned by this organization.
     *
     * @return SecurityGroup[]
     */
    public function getSecurityGroups(): array
    {
        return $this->securityGroups;
    }

    /**
     * The security groups owned by this organization.
     *
     * @param SecurityGroup[] $securityGroups
     */
    public function setSecurityGroups(array $securityGroups): self
    {
        $this->initialized['securityGroups'] = true;
        $this->securityGroups = $securityGroups;

        return $this;
    }
}