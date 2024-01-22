<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DNSZoneNotVerified extends \ArrayObject
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
     * @var DNSZoneVerificationDetails
     */
    protected $verificationDetails;

    public function getVerificationDetails(): DNSZoneVerificationDetails
    {
        return $this->verificationDetails;
    }

    public function setVerificationDetails(DNSZoneVerificationDetails $verificationDetails): self
    {
        $this->initialized['verificationDetails'] = true;
        $this->verificationDetails = $verificationDetails;

        return $this;
    }
}
