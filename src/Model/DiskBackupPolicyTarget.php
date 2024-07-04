<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DiskBackupPolicyTarget extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $target;

    public function getTarget()
    {
        return $this->target;
    }

    public function setTarget($target): self
    {
        $this->initialized['target'] = true;
        $this->target = $target;

        return $this;
    }
}
