<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class UsersCurrentGetResponse200 extends \ArrayObject
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
     * @var User
     */
    protected $user;
    /**
     * @var list<GetUsersCurrent200ResponseOrganizations>
     */
    protected $organizations;
    /**
     * @var string|null
     */
    protected $apiTokenId;

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }

    /**
     * @return list<GetUsersCurrent200ResponseOrganizations>
     */
    public function getOrganizations(): array
    {
        return $this->organizations;
    }

    /**
     * @param list<GetUsersCurrent200ResponseOrganizations> $organizations
     */
    public function setOrganizations(array $organizations): self
    {
        $this->initialized['organizations'] = true;
        $this->organizations = $organizations;

        return $this;
    }

    public function getApiTokenId(): ?string
    {
        return $this->apiTokenId;
    }

    public function setApiTokenId(?string $apiTokenId): self
    {
        $this->initialized['apiTokenId'] = true;
        $this->apiTokenId = $apiTokenId;

        return $this;
    }
}