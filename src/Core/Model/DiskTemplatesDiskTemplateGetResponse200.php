<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DiskTemplatesDiskTemplateGetResponse200 extends \ArrayObject
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
     * The disk template details.
     *
     * @var DiskTemplatesDiskTemplateGetResponse200DiskTemplate
     */
    protected $diskTemplate;

    /**
     * The disk template details.
     */
    public function getDiskTemplate(): DiskTemplatesDiskTemplateGetResponse200DiskTemplate
    {
        return $this->diskTemplate;
    }

    /**
     * The disk template details.
     */
    public function setDiskTemplate(DiskTemplatesDiskTemplateGetResponse200DiskTemplate $diskTemplate): self
    {
        $this->initialized['diskTemplate'] = true;
        $this->diskTemplate = $diskTemplate;

        return $this;
    }
}
