<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class CertificatesCertificateGetResponse200 extends \ArrayObject
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
     * @var Certificate[]
     */
    protected $certificate;

    /**
     * @return Certificate[]
     */
    public function getCertificate(): array
    {
        return $this->certificate;
    }

    /**
     * @param Certificate[] $certificate
     */
    public function setCertificate(array $certificate): self
    {
        $this->initialized['certificate'] = true;
        $this->certificate = $certificate;

        return $this;
    }
}
