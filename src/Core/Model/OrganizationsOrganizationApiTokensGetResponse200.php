<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class OrganizationsOrganizationApiTokensGetResponse200 extends \ArrayObject
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
     * @var PaginationObject
     */
    protected $pagination;
    /**
     * @var list<APIToken>
     */
    protected $apiTokens;

    public function getPagination(): PaginationObject
    {
        return $this->pagination;
    }

    public function setPagination(PaginationObject $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * @return list<APIToken>
     */
    public function getApiTokens(): array
    {
        return $this->apiTokens;
    }

    /**
     * @param list<APIToken> $apiTokens
     */
    public function setApiTokens(array $apiTokens): self
    {
        $this->initialized['apiTokens'] = true;
        $this->apiTokens = $apiTokens;

        return $this;
    }
}
