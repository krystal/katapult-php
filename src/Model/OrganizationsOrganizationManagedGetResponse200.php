<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class OrganizationsOrganizationManagedGetResponse200 extends \ArrayObject
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
     * @var OrganizationsOrganizationManagedGetResponse200Pagination
     */
    protected $pagination;
    /**
     * @var GetOrganizationManaged200ResponseOrganizations[]
     */
    protected $organizations;

    public function getPagination(): OrganizationsOrganizationManagedGetResponse200Pagination
    {
        return $this->pagination;
    }

    public function setPagination(OrganizationsOrganizationManagedGetResponse200Pagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * @return GetOrganizationManaged200ResponseOrganizations[]
     */
    public function getOrganizations(): array
    {
        return $this->organizations;
    }

    /**
     * @param GetOrganizationManaged200ResponseOrganizations[] $organizations
     */
    public function setOrganizations(array $organizations): self
    {
        $this->initialized['organizations'] = true;
        $this->organizations = $organizations;

        return $this;
    }
}
