<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class Certificate extends \ArrayObject
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
     * @var list<string>
     */
    protected $additionalNames;
    /**
     * @var string
     */
    protected $issuer;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var int|null
     */
    protected $expiresAt;
    /**
     * @var int|null
     */
    protected $lastIssuedAt;
    /**
     * @var string|null
     */
    protected $issueError;
    /**
     * @var string|null
     */
    protected $authorizationMethod;
    /**
     * This is the URL that can be used to access this certificate's details. through the certificate API (a different API to this one). If null, this means that it is no longer available. If that is the case, you can get a new URL by resetting the API token for this certificate.
     *
     * @var string|null
     */
    protected $certificateApiUrl;
    /**
     * @var string|null
     */
    protected $certificate;
    /**
     * @var string|null
     */
    protected $chain;
    /**
     * @var string|null
     */
    protected $privateKey;

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

    /**
     * @return list<string>
     */
    public function getAdditionalNames(): array
    {
        return $this->additionalNames;
    }

    /**
     * @param list<string> $additionalNames
     */
    public function setAdditionalNames(array $additionalNames): self
    {
        $this->initialized['additionalNames'] = true;
        $this->additionalNames = $additionalNames;

        return $this;
    }

    public function getIssuer(): string
    {
        return $this->issuer;
    }

    public function setIssuer(string $issuer): self
    {
        $this->initialized['issuer'] = true;
        $this->issuer = $issuer;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getExpiresAt(): ?int
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(?int $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;

        return $this;
    }

    public function getLastIssuedAt(): ?int
    {
        return $this->lastIssuedAt;
    }

    public function setLastIssuedAt(?int $lastIssuedAt): self
    {
        $this->initialized['lastIssuedAt'] = true;
        $this->lastIssuedAt = $lastIssuedAt;

        return $this;
    }

    public function getIssueError(): ?string
    {
        return $this->issueError;
    }

    public function setIssueError(?string $issueError): self
    {
        $this->initialized['issueError'] = true;
        $this->issueError = $issueError;

        return $this;
    }

    public function getAuthorizationMethod(): ?string
    {
        return $this->authorizationMethod;
    }

    public function setAuthorizationMethod(?string $authorizationMethod): self
    {
        $this->initialized['authorizationMethod'] = true;
        $this->authorizationMethod = $authorizationMethod;

        return $this;
    }

    /**
     * This is the URL that can be used to access this certificate's details. through the certificate API (a different API to this one). If null, this means that it is no longer available. If that is the case, you can get a new URL by resetting the API token for this certificate.
     */
    public function getCertificateApiUrl(): ?string
    {
        return $this->certificateApiUrl;
    }

    /**
     * This is the URL that can be used to access this certificate's details. through the certificate API (a different API to this one). If null, this means that it is no longer available. If that is the case, you can get a new URL by resetting the API token for this certificate.
     */
    public function setCertificateApiUrl(?string $certificateApiUrl): self
    {
        $this->initialized['certificateApiUrl'] = true;
        $this->certificateApiUrl = $certificateApiUrl;

        return $this;
    }

    public function getCertificate(): ?string
    {
        return $this->certificate;
    }

    public function setCertificate(?string $certificate): self
    {
        $this->initialized['certificate'] = true;
        $this->certificate = $certificate;

        return $this;
    }

    public function getChain(): ?string
    {
        return $this->chain;
    }

    public function setChain(?string $chain): self
    {
        $this->initialized['chain'] = true;
        $this->chain = $chain;

        return $this;
    }

    public function getPrivateKey(): ?string
    {
        return $this->privateKey;
    }

    public function setPrivateKey(?string $privateKey): self
    {
        $this->initialized['privateKey'] = true;
        $this->privateKey = $privateKey;

        return $this;
    }
}
