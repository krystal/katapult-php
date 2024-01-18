<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class SecurityGroupsSecurityGroupRulesGetResponse200 extends \ArrayObject
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
     * @var SecurityGroupsSecurityGroupRulesGetResponse200Pagination
     */
    protected $pagination;
    /**
     * The security group rules for this security group.
     *
     * @var GetSecurityGroupRules200ResponseSecurityGroupRules[]
     */
    protected $securityGroupRules;

    public function getPagination(): SecurityGroupsSecurityGroupRulesGetResponse200Pagination
    {
        return $this->pagination;
    }

    public function setPagination(SecurityGroupsSecurityGroupRulesGetResponse200Pagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * The security group rules for this security group.
     *
     * @return GetSecurityGroupRules200ResponseSecurityGroupRules[]
     */
    public function getSecurityGroupRules(): array
    {
        return $this->securityGroupRules;
    }

    /**
     * The security group rules for this security group.
     *
     * @param GetSecurityGroupRules200ResponseSecurityGroupRules[] $securityGroupRules
     */
    public function setSecurityGroupRules(array $securityGroupRules): self
    {
        $this->initialized['securityGroupRules'] = true;
        $this->securityGroupRules = $securityGroupRules;

        return $this;
    }
}