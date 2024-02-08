<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class LoadBalancersLoadBalancerPatchResponse200LoadBalancer extends \ArrayObject
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
     * @var string|null
     */
    protected $apiReference;
    /**
     * @var string
     */
    protected $resourceType;
    /**
     * @var LoadBalancerResource[]
     */
    protected $resources;
    /**
     * @var string[]
     */
    protected $resourceIds;
    /**
     * @var PatchLoadBalancerPartIPAddress[]
     */
    protected $ipAddress;
    /**
     * @var bool
     */
    protected $httpsRedirect;
    /**
     * @var string
     */
    protected $backendCertificate;
    /**
     * @var string
     */
    protected $backendCertificateKey;
    /**
     * @var PatchLoadBalancerPartDataCenter
     */
    protected $dataCenter;
    /**
     * @var bool
     */
    protected $enableWeighting;
    /**
     * @var LoadBalancerWeight[]
     */
    protected $weights;
    /**
     * @var string[]
     */
    protected $standbyVms;

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

    public function getApiReference(): ?string
    {
        return $this->apiReference;
    }

    public function setApiReference(?string $apiReference): self
    {
        $this->initialized['apiReference'] = true;
        $this->apiReference = $apiReference;

        return $this;
    }

    public function getResourceType(): string
    {
        return $this->resourceType;
    }

    public function setResourceType(string $resourceType): self
    {
        $this->initialized['resourceType'] = true;
        $this->resourceType = $resourceType;

        return $this;
    }

    /**
     * @return LoadBalancerResource[]
     */
    public function getResources(): array
    {
        return $this->resources;
    }

    /**
     * @param LoadBalancerResource[] $resources
     */
    public function setResources(array $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getResourceIds(): array
    {
        return $this->resourceIds;
    }

    /**
     * @param string[] $resourceIds
     */
    public function setResourceIds(array $resourceIds): self
    {
        $this->initialized['resourceIds'] = true;
        $this->resourceIds = $resourceIds;

        return $this;
    }

    /**
     * @return PatchLoadBalancerPartIPAddress[]
     */
    public function getIpAddress(): array
    {
        return $this->ipAddress;
    }

    /**
     * @param PatchLoadBalancerPartIPAddress[] $ipAddress
     */
    public function setIpAddress(array $ipAddress): self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getHttpsRedirect(): bool
    {
        return $this->httpsRedirect;
    }

    public function setHttpsRedirect(bool $httpsRedirect): self
    {
        $this->initialized['httpsRedirect'] = true;
        $this->httpsRedirect = $httpsRedirect;

        return $this;
    }

    public function getBackendCertificate(): string
    {
        return $this->backendCertificate;
    }

    public function setBackendCertificate(string $backendCertificate): self
    {
        $this->initialized['backendCertificate'] = true;
        $this->backendCertificate = $backendCertificate;

        return $this;
    }

    public function getBackendCertificateKey(): string
    {
        return $this->backendCertificateKey;
    }

    public function setBackendCertificateKey(string $backendCertificateKey): self
    {
        $this->initialized['backendCertificateKey'] = true;
        $this->backendCertificateKey = $backendCertificateKey;

        return $this;
    }

    public function getDataCenter(): PatchLoadBalancerPartDataCenter
    {
        return $this->dataCenter;
    }

    public function setDataCenter(PatchLoadBalancerPartDataCenter $dataCenter): self
    {
        $this->initialized['dataCenter'] = true;
        $this->dataCenter = $dataCenter;

        return $this;
    }

    public function getEnableWeighting(): bool
    {
        return $this->enableWeighting;
    }

    public function setEnableWeighting(bool $enableWeighting): self
    {
        $this->initialized['enableWeighting'] = true;
        $this->enableWeighting = $enableWeighting;

        return $this;
    }

    /**
     * @return LoadBalancerWeight[]
     */
    public function getWeights(): array
    {
        return $this->weights;
    }

    /**
     * @param LoadBalancerWeight[] $weights
     */
    public function setWeights(array $weights): self
    {
        $this->initialized['weights'] = true;
        $this->weights = $weights;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getStandbyVms(): array
    {
        return $this->standbyVms;
    }

    /**
     * @param string[] $standbyVms
     */
    public function setStandbyVms(array $standbyVms): self
    {
        $this->initialized['standbyVms'] = true;
        $this->standbyVms = $standbyVms;

        return $this;
    }
}
