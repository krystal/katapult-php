<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class VirtualMachinePackagesGetResponse200Pagination extends \ArrayObject
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
     * The current page.
     *
     * @var int
     */
    protected $currentPage;
    /**
     * The total number of pages.
     *
     * @var int
     */
    protected $totalPages;
    /**
     * The total number of items across all pages.
     *
     * @var int
     */
    protected $total;
    /**
     * The number of items per page.
     *
     * @var int
     */
    protected $perPage;
    /**
     * Is this a large set and therefore the total number of records cannot be returned?
     *
     * @var bool
     */
    protected $largeSet;

    /**
     * The current page.
     */
    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    /**
     * The current page.
     */
    public function setCurrentPage(int $currentPage): self
    {
        $this->initialized['currentPage'] = true;
        $this->currentPage = $currentPage;

        return $this;
    }

    /**
     * The total number of pages.
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * The total number of pages.
     */
    public function setTotalPages(int $totalPages): self
    {
        $this->initialized['totalPages'] = true;
        $this->totalPages = $totalPages;

        return $this;
    }

    /**
     * The total number of items across all pages.
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * The total number of items across all pages.
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }

    /**
     * The number of items per page.
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * The number of items per page.
     */
    public function setPerPage(int $perPage): self
    {
        $this->initialized['perPage'] = true;
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * Is this a large set and therefore the total number of records cannot be returned?
     */
    public function getLargeSet(): bool
    {
        return $this->largeSet;
    }

    /**
     * Is this a large set and therefore the total number of records cannot be returned?
     */
    public function setLargeSet(bool $largeSet): self
    {
        $this->initialized['largeSet'] = true;
        $this->largeSet = $largeSet;

        return $this;
    }
}