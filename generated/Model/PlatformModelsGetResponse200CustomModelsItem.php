<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class PlatformModelsGetResponse200CustomModelsItem extends \ArrayObject
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
     * @var string
     */
    protected $description;
    /**
     * @var bool
     */
    protected $featured;
    /**
     * columns and relationships of "generated_images".
     *
     * @var PlatformModelsGetResponse200CustomModelsItemGeneratedImage|null
     */
    protected $generatedImage;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $nsfw;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getFeatured(): bool
    {
        return $this->featured;
    }

    public function setFeatured(bool $featured): self
    {
        $this->initialized['featured'] = true;
        $this->featured = $featured;

        return $this;
    }

    /**
     * columns and relationships of "generated_images".
     */
    public function getGeneratedImage(): ?PlatformModelsGetResponse200CustomModelsItemGeneratedImage
    {
        return $this->generatedImage;
    }

    /**
     * columns and relationships of "generated_images".
     */
    public function setGeneratedImage(?PlatformModelsGetResponse200CustomModelsItemGeneratedImage $generatedImage): self
    {
        $this->initialized['generatedImage'] = true;
        $this->generatedImage = $generatedImage;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
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

    public function getNsfw(): bool
    {
        return $this->nsfw;
    }

    public function setNsfw(bool $nsfw): self
    {
        $this->initialized['nsfw'] = true;
        $this->nsfw = $nsfw;

        return $this;
    }
}