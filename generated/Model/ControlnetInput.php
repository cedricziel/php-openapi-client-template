<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class ControlnetInput extends \ArrayObject
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
     * The ID of the init image.
     *
     * @var string
     */
    protected $initImageId;
    /**
     * Type indicating whether the init image is uploaded or generated.
     *
     * @var string
     */
    protected $initImageType;
    /**
     * ID of the controlnet. A list of compatible IDs can be found in our guides.
     *
     * @var float
     */
    protected $preprocessorId;
    /**
     * Weight for the controlnet.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Strength type for the controlnet. Can only be used for Style, Character and Content Reference controlnets.
     *
     * @var string|null
     */
    protected $strengthType;

    /**
     * The ID of the init image.
     */
    public function getInitImageId(): string
    {
        return $this->initImageId;
    }

    /**
     * The ID of the init image.
     */
    public function setInitImageId(string $initImageId): self
    {
        $this->initialized['initImageId'] = true;
        $this->initImageId = $initImageId;

        return $this;
    }

    /**
     * Type indicating whether the init image is uploaded or generated.
     */
    public function getInitImageType(): string
    {
        return $this->initImageType;
    }

    /**
     * Type indicating whether the init image is uploaded or generated.
     */
    public function setInitImageType(string $initImageType): self
    {
        $this->initialized['initImageType'] = true;
        $this->initImageType = $initImageType;

        return $this;
    }

    /**
     * ID of the controlnet. A list of compatible IDs can be found in our guides.
     */
    public function getPreprocessorId(): float
    {
        return $this->preprocessorId;
    }

    /**
     * ID of the controlnet. A list of compatible IDs can be found in our guides.
     */
    public function setPreprocessorId(float $preprocessorId): self
    {
        $this->initialized['preprocessorId'] = true;
        $this->preprocessorId = $preprocessorId;

        return $this;
    }

    /**
     * Weight for the controlnet.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Weight for the controlnet.
     */
    public function setWeight(?float $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;

        return $this;
    }

    /**
     * Strength type for the controlnet. Can only be used for Style, Character and Content Reference controlnets.
     */
    public function getStrengthType(): ?string
    {
        return $this->strengthType;
    }

    /**
     * Strength type for the controlnet. Can only be used for Style, Character and Content Reference controlnets.
     */
    public function setStrengthType(?string $strengthType): self
    {
        $this->initialized['strengthType'] = true;
        $this->strengthType = $strengthType;

        return $this;
    }
}