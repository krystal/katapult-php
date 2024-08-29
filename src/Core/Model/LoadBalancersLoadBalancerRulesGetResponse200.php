<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class LoadBalancersLoadBalancerRulesGetResponse200 extends \ArrayObject
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
     * The load balancer rules for this load balancer.
     *
     * @var list<GetLoadBalancerRules200ResponseLoadBalancerRules>
     */
    protected $loadBalancerRules;

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
     * The load balancer rules for this load balancer.
     *
     * @return list<GetLoadBalancerRules200ResponseLoadBalancerRules>
     */
    public function getLoadBalancerRules(): array
    {
        return $this->loadBalancerRules;
    }

    /**
     * The load balancer rules for this load balancer.
     *
     * @param list<GetLoadBalancerRules200ResponseLoadBalancerRules> $loadBalancerRules
     */
    public function setLoadBalancerRules(array $loadBalancerRules): self
    {
        $this->initialized['loadBalancerRules'] = true;
        $this->loadBalancerRules = $loadBalancerRules;

        return $this;
    }
}