<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class SecurityGroupsSecurityGroupRulesPostResponse200 extends \ArrayObject
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
     * The security group rule that has been created.
     *
     * @var SecurityGroupsSecurityGroupRulesPostResponse200SecurityGroupRule
     */
    protected $securityGroupRule;

    /**
     * The security group rule that has been created.
     */
    public function getSecurityGroupRule(): SecurityGroupsSecurityGroupRulesPostResponse200SecurityGroupRule
    {
        return $this->securityGroupRule;
    }

    /**
     * The security group rule that has been created.
     */
    public function setSecurityGroupRule(SecurityGroupsSecurityGroupRulesPostResponse200SecurityGroupRule $securityGroupRule): self
    {
        $this->initialized['securityGroupRule'] = true;
        $this->securityGroupRule = $securityGroupRule;

        return $this;
    }
}
