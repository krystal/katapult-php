<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class OrganizationsOrganizationTrashObjectsGetResponse200 extends \ArrayObject
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
     * @var OrganizationsOrganizationTrashObjectsGetResponse200Pagination
     */
    protected $pagination;
    /**
     * The trash objects that belong to this organization.
     *
     * @var TrashObject[]
     */
    protected $trashObjects;

    public function getPagination(): OrganizationsOrganizationTrashObjectsGetResponse200Pagination
    {
        return $this->pagination;
    }

    public function setPagination(OrganizationsOrganizationTrashObjectsGetResponse200Pagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * The trash objects that belong to this organization.
     *
     * @return TrashObject[]
     */
    public function getTrashObjects(): array
    {
        return $this->trashObjects;
    }

    /**
     * The trash objects that belong to this organization.
     *
     * @param TrashObject[] $trashObjects
     */
    public function setTrashObjects(array $trashObjects): self
    {
        $this->initialized['trashObjects'] = true;
        $this->trashObjects = $trashObjects;

        return $this;
    }
}