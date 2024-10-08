<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class OrganizationsOrganizationDisksGetResponse200 extends \ArrayObject
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
     * @var PaginationObject
     */
    protected $pagination;
    /**
     * The list of disks.
     *
     * @var list<GetOrganizationDisks200ResponseDisk>
     */
    protected $disk;

    public function getPagination(): PaginationObject
    {
        return $this->pagination;
    }

    public function setPagination(PaginationObject $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * The list of disks.
     *
     * @return list<GetOrganizationDisks200ResponseDisk>
     */
    public function getDisk(): array
    {
        return $this->disk;
    }

    /**
     * The list of disks.
     *
     * @param list<GetOrganizationDisks200ResponseDisk> $disk
     */
    public function setDisk(array $disk): self
    {
        $this->initialized['disk'] = true;
        $this->disk = $disk;

        return $this;
    }
}
