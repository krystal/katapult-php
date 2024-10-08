<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class PermissionDenied extends \ArrayObject
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
     * Additional information regarding the reason why permission was denied.
     *
     * @var string|null
     */
    protected $details;

    /**
     * Additional information regarding the reason why permission was denied.
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * Additional information regarding the reason why permission was denied.
     */
    public function setDetails(?string $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }
}
