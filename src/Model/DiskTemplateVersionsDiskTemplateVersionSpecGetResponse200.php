<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DiskTemplateVersionsDiskTemplateVersionSpecGetResponse200 extends \ArrayObject
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
     * The disk template version details.
     *
     * @var DiskTemplateVersionsDiskTemplateVersionSpecGetResponse200DiskTemplateVersion
     */
    protected $diskTemplateVersion;
    /**
     * @var TemplateSpec
     */
    protected $spec;

    /**
     * The disk template version details.
     */
    public function getDiskTemplateVersion(): DiskTemplateVersionsDiskTemplateVersionSpecGetResponse200DiskTemplateVersion
    {
        return $this->diskTemplateVersion;
    }

    /**
     * The disk template version details.
     */
    public function setDiskTemplateVersion(DiskTemplateVersionsDiskTemplateVersionSpecGetResponse200DiskTemplateVersion $diskTemplateVersion): self
    {
        $this->initialized['diskTemplateVersion'] = true;
        $this->diskTemplateVersion = $diskTemplateVersion;

        return $this;
    }

    public function getSpec(): TemplateSpec
    {
        return $this->spec;
    }

    public function setSpec(TemplateSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;

        return $this;
    }
}
