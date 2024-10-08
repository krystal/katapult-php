<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DiskTemplatesDiskTemplateVersionsGetResponse200 extends \ArrayObject
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
     * @var GetDiskTemplateVersions200ResponseDiskTemplate
     */
    protected $diskTemplate;
    /**
     * @var PaginationObject
     */
    protected $pagination;
    /**
     * The disk template versions for the provided template.
     *
     * @var list<GetDiskTemplateVersions200ResponseDiskTemplateVersions>
     */
    protected $diskTemplateVersions;

    public function getDiskTemplate(): GetDiskTemplateVersions200ResponseDiskTemplate
    {
        return $this->diskTemplate;
    }

    public function setDiskTemplate(GetDiskTemplateVersions200ResponseDiskTemplate $diskTemplate): self
    {
        $this->initialized['diskTemplate'] = true;
        $this->diskTemplate = $diskTemplate;

        return $this;
    }

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
     * The disk template versions for the provided template.
     *
     * @return list<GetDiskTemplateVersions200ResponseDiskTemplateVersions>
     */
    public function getDiskTemplateVersions(): array
    {
        return $this->diskTemplateVersions;
    }

    /**
     * The disk template versions for the provided template.
     *
     * @param list<GetDiskTemplateVersions200ResponseDiskTemplateVersions> $diskTemplateVersions
     */
    public function setDiskTemplateVersions(array $diskTemplateVersions): self
    {
        $this->initialized['diskTemplateVersions'] = true;
        $this->diskTemplateVersions = $diskTemplateVersions;

        return $this;
    }
}
