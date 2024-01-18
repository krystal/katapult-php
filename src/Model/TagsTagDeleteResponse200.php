<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class TagsTagDeleteResponse200 extends \ArrayObject
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
     * The newly deleted tag.
     *
     * @var TagsTagDeleteResponse200Tag
     */
    protected $tag;

    /**
     * The newly deleted tag.
     */
    public function getTag(): TagsTagDeleteResponse200Tag
    {
        return $this->tag;
    }

    /**
     * The newly deleted tag.
     */
    public function setTag(TagsTagDeleteResponse200Tag $tag): self
    {
        $this->initialized['tag'] = true;
        $this->tag = $tag;

        return $this;
    }
}