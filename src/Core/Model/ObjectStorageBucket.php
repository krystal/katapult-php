<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class ObjectStorageBucket extends \ArrayObject
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
    protected $name;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string|null
     */
    protected $customDomain;
    /**
     * @var int|null
     */
    protected $objectCount;
    /**
     * @var int|null
     */
    protected $size;
    /**
     * @var bool
     */
    protected $serveStaticSite;
    /**
     * @var string|null
     */
    protected $staticSiteIndex;
    /**
     * @var string|null
     */
    protected $staticSiteError;
    /**
     * @var string
     */
    protected $publicUrl;
    /**
     * @var ObjectStorageBucketAccessControlList
     */
    protected $accessControlList;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    public function getCustomDomain(): ?string
    {
        return $this->customDomain;
    }

    public function setCustomDomain(?string $customDomain): self
    {
        $this->initialized['customDomain'] = true;
        $this->customDomain = $customDomain;

        return $this;
    }

    public function getObjectCount(): ?int
    {
        return $this->objectCount;
    }

    public function setObjectCount(?int $objectCount): self
    {
        $this->initialized['objectCount'] = true;
        $this->objectCount = $objectCount;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;

        return $this;
    }

    public function getServeStaticSite(): bool
    {
        return $this->serveStaticSite;
    }

    public function setServeStaticSite(bool $serveStaticSite): self
    {
        $this->initialized['serveStaticSite'] = true;
        $this->serveStaticSite = $serveStaticSite;

        return $this;
    }

    public function getStaticSiteIndex(): ?string
    {
        return $this->staticSiteIndex;
    }

    public function setStaticSiteIndex(?string $staticSiteIndex): self
    {
        $this->initialized['staticSiteIndex'] = true;
        $this->staticSiteIndex = $staticSiteIndex;

        return $this;
    }

    public function getStaticSiteError(): ?string
    {
        return $this->staticSiteError;
    }

    public function setStaticSiteError(?string $staticSiteError): self
    {
        $this->initialized['staticSiteError'] = true;
        $this->staticSiteError = $staticSiteError;

        return $this;
    }

    public function getPublicUrl(): string
    {
        return $this->publicUrl;
    }

    public function setPublicUrl(string $publicUrl): self
    {
        $this->initialized['publicUrl'] = true;
        $this->publicUrl = $publicUrl;

        return $this;
    }

    public function getAccessControlList(): ObjectStorageBucketAccessControlList
    {
        return $this->accessControlList;
    }

    public function setAccessControlList(ObjectStorageBucketAccessControlList $accessControlList): self
    {
        $this->initialized['accessControlList'] = true;
        $this->accessControlList = $accessControlList;

        return $this;
    }
}
