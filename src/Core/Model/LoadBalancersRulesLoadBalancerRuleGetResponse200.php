<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class LoadBalancersRulesLoadBalancerRuleGetResponse200 extends \ArrayObject
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
     * The resolved load balancer rule.
     *
     * @var LoadBalancersRulesLoadBalancerRuleGetResponse200LoadBalancerRule
     */
    protected $loadBalancerRule;

    /**
     * The resolved load balancer rule.
     */
    public function getLoadBalancerRule(): LoadBalancersRulesLoadBalancerRuleGetResponse200LoadBalancerRule
    {
        return $this->loadBalancerRule;
    }

    /**
     * The resolved load balancer rule.
     */
    public function setLoadBalancerRule(LoadBalancersRulesLoadBalancerRuleGetResponse200LoadBalancerRule $loadBalancerRule): self
    {
        $this->initialized['loadBalancerRule'] = true;
        $this->loadBalancerRule = $loadBalancerRule;

        return $this;
    }
}
