<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class TagsTagGetResponse200 extends \ArrayObject
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
     * The details for the requested tag.
     *
     * @var TagsTagGetResponse200Tag
     */
    protected $tag;

    /**
     * The details for the requested tag.
     */
    public function getTag(): TagsTagGetResponse200Tag
    {
        return $this->tag;
    }

    /**
     * The details for the requested tag.
     */
    public function setTag(TagsTagGetResponse200Tag $tag): self
    {
        $this->initialized['tag'] = true;
        $this->tag = $tag;

        return $this;
    }
}
