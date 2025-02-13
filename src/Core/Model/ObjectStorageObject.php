<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class ObjectStorageObject extends \ArrayObject
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
    protected $filename;
    /**
     * @var string
     */
    protected $bucketName;
    /**
     * @var string
     */
    protected $fullPath;
    /**
     * @var string
     */
    protected $publicUrl;
    /**
     * The length of the object content in the response body, in bytes.
     *
     * @var int|null
     */
    protected $size;
    /**
     * @var bool
     */
    protected $folder;

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;

        return $this;
    }

    public function getBucketName(): string
    {
        return $this->bucketName;
    }

    public function setBucketName(string $bucketName): self
    {
        $this->initialized['bucketName'] = true;
        $this->bucketName = $bucketName;

        return $this;
    }

    public function getFullPath(): string
    {
        return $this->fullPath;
    }

    public function setFullPath(string $fullPath): self
    {
        $this->initialized['fullPath'] = true;
        $this->fullPath = $fullPath;

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

    /**
     * The length of the object content in the response body, in bytes.
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * The length of the object content in the response body, in bytes.
     */
    public function setSize(?int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;

        return $this;
    }

    public function getFolder(): bool
    {
        return $this->folder;
    }

    public function setFolder(bool $folder): self
    {
        $this->initialized['folder'] = true;
        $this->folder = $folder;

        return $this;
    }
}
