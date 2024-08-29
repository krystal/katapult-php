<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class NetworkSpeedProfile extends \ArrayObject
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
     * @var string
     */
    protected $name;
    /**
     * @var int|null
     */
    protected $uploadSpeedInMbit;
    /**
     * @var int|null
     */
    protected $downloadSpeedInMbit;
    /**
     * @var string
     */
    protected $permalink;

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

    public function getUploadSpeedInMbit(): ?int
    {
        return $this->uploadSpeedInMbit;
    }

    public function setUploadSpeedInMbit(?int $uploadSpeedInMbit): self
    {
        $this->initialized['uploadSpeedInMbit'] = true;
        $this->uploadSpeedInMbit = $uploadSpeedInMbit;

        return $this;
    }

    public function getDownloadSpeedInMbit(): ?int
    {
        return $this->downloadSpeedInMbit;
    }

    public function setDownloadSpeedInMbit(?int $downloadSpeedInMbit): self
    {
        $this->initialized['downloadSpeedInMbit'] = true;
        $this->downloadSpeedInMbit = $downloadSpeedInMbit;

        return $this;
    }

    public function getPermalink(): string
    {
        return $this->permalink;
    }

    public function setPermalink(string $permalink): self
    {
        $this->initialized['permalink'] = true;
        $this->permalink = $permalink;

        return $this;
    }
}