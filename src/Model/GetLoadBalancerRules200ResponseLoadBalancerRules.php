<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class GetLoadBalancerRules200ResponseLoadBalancerRules extends \ArrayObject
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
    protected $algorithm;
    /**
     * @var int
     */
    protected $destinationPort;
    /**
     * @var int
     */
    protected $listenPort;
    /**
     * @var string
     */
    protected $protocol;
    /**
     * @var GetLoadBalancerRulesPartCertificates[]
     */
    protected $certificates;
    /**
     * @var bool
     */
    protected $checkEnabled;

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

    public function getAlgorithm(): string
    {
        return $this->algorithm;
    }

    public function setAlgorithm(string $algorithm): self
    {
        $this->initialized['algorithm'] = true;
        $this->algorithm = $algorithm;

        return $this;
    }

    public function getDestinationPort(): int
    {
        return $this->destinationPort;
    }

    public function setDestinationPort(int $destinationPort): self
    {
        $this->initialized['destinationPort'] = true;
        $this->destinationPort = $destinationPort;

        return $this;
    }

    public function getListenPort(): int
    {
        return $this->listenPort;
    }

    public function setListenPort(int $listenPort): self
    {
        $this->initialized['listenPort'] = true;
        $this->listenPort = $listenPort;

        return $this;
    }

    public function getProtocol(): string
    {
        return $this->protocol;
    }

    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * @return GetLoadBalancerRulesPartCertificates[]
     */
    public function getCertificates(): array
    {
        return $this->certificates;
    }

    /**
     * @param GetLoadBalancerRulesPartCertificates[] $certificates
     */
    public function setCertificates(array $certificates): self
    {
        $this->initialized['certificates'] = true;
        $this->certificates = $certificates;

        return $this;
    }

    public function getCheckEnabled(): bool
    {
        return $this->checkEnabled;
    }

    public function setCheckEnabled(bool $checkEnabled): self
    {
        $this->initialized['checkEnabled'] = true;
        $this->checkEnabled = $checkEnabled;

        return $this;
    }
}
