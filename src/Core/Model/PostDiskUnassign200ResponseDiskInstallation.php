<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class PostDiskUnassign200ResponseDiskInstallation extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * @var DiskTemplateVersion
     */
    protected $diskTemplateVersion;
    /**
     * @var list<DiskInstallationAttribute>
     */
    protected $attributes;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getDiskTemplateVersion(): DiskTemplateVersion
    {
        return $this->diskTemplateVersion;
    }

    public function setDiskTemplateVersion(DiskTemplateVersion $diskTemplateVersion): self
    {
        $this->initialized['diskTemplateVersion'] = true;
        $this->diskTemplateVersion = $diskTemplateVersion;

        return $this;
    }

    /**
     * @return list<DiskInstallationAttribute>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param list<DiskInstallationAttribute> $attributes
     */
    public function setAttributes(array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }
}
