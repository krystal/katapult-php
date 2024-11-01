<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DisksDiskResizePutBody extends \ArrayObject
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
     * @var DiskLookup
     */
    protected $disk;
    /**
     * @var int
     */
    protected $sizeInGb;
    /**
     * @var string
     */
    protected $resizeMethod;

    public function getDisk(): DiskLookup
    {
        return $this->disk;
    }

    public function setDisk(DiskLookup $disk): self
    {
        $this->initialized['disk'] = true;
        $this->disk = $disk;

        return $this;
    }

    public function getSizeInGb(): int
    {
        return $this->sizeInGb;
    }

    public function setSizeInGb(int $sizeInGb): self
    {
        $this->initialized['sizeInGb'] = true;
        $this->sizeInGb = $sizeInGb;

        return $this;
    }

    public function getResizeMethod(): string
    {
        return $this->resizeMethod;
    }

    public function setResizeMethod(string $resizeMethod): self
    {
        $this->initialized['resizeMethod'] = true;
        $this->resizeMethod = $resizeMethod;

        return $this;
    }
}
