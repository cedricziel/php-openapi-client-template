<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class GenerationsTextureModelModelIdGetResponse200ModelAssetTextureGenerationsItem extends \ArrayObject
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
    protected $createdAt;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var list<GenerationsTextureModelModelIdGetResponse200ModelAssetTextureGenerationsItemModelAssetTextureImagesItem>
     */
    protected $modelAssetTextureImages;
    /**
     * @var string|null
     */
    protected $negativePrompt;
    /**
     * @var string
     */
    protected $prompt;
    /**
     * @var int|null
     */
    protected $seed;
    /**
     * The status of the current task.
     *
     * @var string
     */
    protected $status;

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

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

    /**
     * @return list<GenerationsTextureModelModelIdGetResponse200ModelAssetTextureGenerationsItemModelAssetTextureImagesItem>
     */
    public function getModelAssetTextureImages(): array
    {
        return $this->modelAssetTextureImages;
    }

    /**
     * @param list<GenerationsTextureModelModelIdGetResponse200ModelAssetTextureGenerationsItemModelAssetTextureImagesItem> $modelAssetTextureImages
     */
    public function setModelAssetTextureImages(array $modelAssetTextureImages): self
    {
        $this->initialized['modelAssetTextureImages'] = true;
        $this->modelAssetTextureImages = $modelAssetTextureImages;

        return $this;
    }

    public function getNegativePrompt(): ?string
    {
        return $this->negativePrompt;
    }

    public function setNegativePrompt(?string $negativePrompt): self
    {
        $this->initialized['negativePrompt'] = true;
        $this->negativePrompt = $negativePrompt;

        return $this;
    }

    public function getPrompt(): string
    {
        return $this->prompt;
    }

    public function setPrompt(string $prompt): self
    {
        $this->initialized['prompt'] = true;
        $this->prompt = $prompt;

        return $this;
    }

    public function getSeed(): ?int
    {
        return $this->seed;
    }

    public function setSeed(?int $seed): self
    {
        $this->initialized['seed'] = true;
        $this->seed = $seed;

        return $this;
    }

    /**
     * The status of the current task.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * The status of the current task.
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
