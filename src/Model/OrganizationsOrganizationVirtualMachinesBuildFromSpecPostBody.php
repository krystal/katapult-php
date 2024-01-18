<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class OrganizationsOrganizationVirtualMachinesBuildFromSpecPostBody extends \ArrayObject
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
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     *
     * @var OrganizationLookup
     */
    protected $organization;
    /**
     * @var string
     */
    protected $xml;

    /**
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     */
    public function getOrganization(): OrganizationLookup
    {
        return $this->organization;
    }

    /**
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     */
    public function setOrganization(OrganizationLookup $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    public function getXml(): string
    {
        return $this->xml;
    }

    public function setXml(string $xml): self
    {
        $this->initialized['xml'] = true;
        $this->xml = $xml;

        return $this;
    }
}
