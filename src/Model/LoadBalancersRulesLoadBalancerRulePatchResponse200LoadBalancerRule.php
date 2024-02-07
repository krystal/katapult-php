<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class LoadBalancersRulesLoadBalancerRulePatchResponse200LoadBalancerRule extends \ArrayObject
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
     * @var bool
     */
    protected $proxyProtocol;
    /**
     * @var Certificate[]
     */
    protected $certificates;
    /**
     * @var bool
     */
    protected $backendSsl;
    /**
     * @var bool
     */
    protected $passthroughSsl;
    /**
     * @var bool
     */
    protected $checkEnabled;
    /**
     * @var int
     */
    protected $checkFall;
    /**
     * @var int
     */
    protected $checkInterval;
    /**
     * @var string
     */
    protected $checkPath;
    /**
     * @var string|null
     */
    protected $checkProtocol;
    /**
     * @var int
     */
    protected $checkRise;
    /**
     * @var int
     */
    protected $checkTimeout;
    /**
     * @var string|null
     */
    protected $checkHttpStatuses;
    /**
     * @var LoadBalancer
     */
    protected $loadBalancer;

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

    public function getProxyProtocol(): bool
    {
        return $this->proxyProtocol;
    }

    public function setProxyProtocol(bool $proxyProtocol): self
    {
        $this->initialized['proxyProtocol'] = true;
        $this->proxyProtocol = $proxyProtocol;

        return $this;
    }

    /**
     * @return Certificate[]
     */
    public function getCertificates(): array
    {
        return $this->certificates;
    }

    /**
     * @param Certificate[] $certificates
     */
    public function setCertificates(array $certificates): self
    {
        $this->initialized['certificates'] = true;
        $this->certificates = $certificates;

        return $this;
    }

    public function getBackendSsl(): bool
    {
        return $this->backendSsl;
    }

    public function setBackendSsl(bool $backendSsl): self
    {
        $this->initialized['backendSsl'] = true;
        $this->backendSsl = $backendSsl;

        return $this;
    }

    public function getPassthroughSsl(): bool
    {
        return $this->passthroughSsl;
    }

    public function setPassthroughSsl(bool $passthroughSsl): self
    {
        $this->initialized['passthroughSsl'] = true;
        $this->passthroughSsl = $passthroughSsl;

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

    public function getCheckFall(): int
    {
        return $this->checkFall;
    }

    public function setCheckFall(int $checkFall): self
    {
        $this->initialized['checkFall'] = true;
        $this->checkFall = $checkFall;

        return $this;
    }

    public function getCheckInterval(): int
    {
        return $this->checkInterval;
    }

    public function setCheckInterval(int $checkInterval): self
    {
        $this->initialized['checkInterval'] = true;
        $this->checkInterval = $checkInterval;

        return $this;
    }

    public function getCheckPath(): string
    {
        return $this->checkPath;
    }

    public function setCheckPath(string $checkPath): self
    {
        $this->initialized['checkPath'] = true;
        $this->checkPath = $checkPath;

        return $this;
    }

    public function getCheckProtocol(): ?string
    {
        return $this->checkProtocol;
    }

    public function setCheckProtocol(?string $checkProtocol): self
    {
        $this->initialized['checkProtocol'] = true;
        $this->checkProtocol = $checkProtocol;

        return $this;
    }

    public function getCheckRise(): int
    {
        return $this->checkRise;
    }

    public function setCheckRise(int $checkRise): self
    {
        $this->initialized['checkRise'] = true;
        $this->checkRise = $checkRise;

        return $this;
    }

    public function getCheckTimeout(): int
    {
        return $this->checkTimeout;
    }

    public function setCheckTimeout(int $checkTimeout): self
    {
        $this->initialized['checkTimeout'] = true;
        $this->checkTimeout = $checkTimeout;

        return $this;
    }

    public function getCheckHttpStatuses(): ?string
    {
        return $this->checkHttpStatuses;
    }

    public function setCheckHttpStatuses(?string $checkHttpStatuses): self
    {
        $this->initialized['checkHttpStatuses'] = true;
        $this->checkHttpStatuses = $checkHttpStatuses;

        return $this;
    }

    public function getLoadBalancer(): LoadBalancer
    {
        return $this->loadBalancer;
    }

    public function setLoadBalancer(LoadBalancer $loadBalancer): self
    {
        $this->initialized['loadBalancer'] = true;
        $this->loadBalancer = $loadBalancer;

        return $this;
    }
}
