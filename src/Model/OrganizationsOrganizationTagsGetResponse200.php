<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class OrganizationsOrganizationTagsGetResponse200 extends \ArrayObject
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
     * @var OrganizationsOrganizationTagsGetResponse200Pagination
     */
    protected $pagination;
    /**
     * The details for the tags on the organization.
     *
     * @var GetOrganizationTags200ResponseTags[]
     */
    protected $tags;

    public function getPagination(): OrganizationsOrganizationTagsGetResponse200Pagination
    {
        return $this->pagination;
    }

    public function setPagination(OrganizationsOrganizationTagsGetResponse200Pagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * The details for the tags on the organization.
     *
     * @return GetOrganizationTags200ResponseTags[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * The details for the tags on the organization.
     *
     * @param GetOrganizationTags200ResponseTags[] $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }
}
