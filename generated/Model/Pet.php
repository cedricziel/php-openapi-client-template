<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace myvendor\mynamespace\Generated\Model;

class Pet extends \ArrayObject
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
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $tag;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
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

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->initialized['tag'] = true;
        $this->tag = $tag;

        return $this;
    }
}