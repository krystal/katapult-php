<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class OrganizationsOrganizationDeletionStepsGetResponse200 extends \ArrayObject
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
     * @var OrganizationDeletionSteps
     */
    protected $steps;

    public function getSteps(): OrganizationDeletionSteps
    {
        return $this->steps;
    }

    public function setSteps(OrganizationDeletionSteps $steps): self
    {
        $this->initialized['steps'] = true;
        $this->steps = $steps;

        return $this;
    }
}
