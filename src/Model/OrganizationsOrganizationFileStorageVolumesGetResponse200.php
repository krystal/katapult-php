<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class OrganizationsOrganizationFileStorageVolumesGetResponse200 extends \ArrayObject
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
     * A list of all file storage volumes for the given organization.
     *
     * @var GetOrganizationFileStorageVolumes200ResponseFileStorageVolumes[]
     */
    protected $fileStorageVolumes;

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
     * A list of all file storage volumes for the given organization.
     *
     * @return GetOrganizationFileStorageVolumes200ResponseFileStorageVolumes[]
     */
    public function getFileStorageVolumes(): array
    {
        return $this->fileStorageVolumes;
    }

    /**
     * A list of all file storage volumes for the given organization.
     *
     * @param GetOrganizationFileStorageVolumes200ResponseFileStorageVolumes[] $fileStorageVolumes
     */
    public function setFileStorageVolumes(array $fileStorageVolumes): self
    {
        $this->initialized['fileStorageVolumes'] = true;
        $this->fileStorageVolumes = $fileStorageVolumes;

        return $this;
    }
}
