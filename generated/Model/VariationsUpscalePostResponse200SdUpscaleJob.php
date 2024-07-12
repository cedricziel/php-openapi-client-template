<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class VariationsUpscalePostResponse200SdUpscaleJob extends \ArrayObject
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
    protected $id;
    /**
     * API Credits Cost for Upscale Variation. Available for Production API Users.
     *
     * @var int|null
     */
    protected $apiCreditCost;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * API Credits Cost for Upscale Variation. Available for Production API Users.
     */
    public function getApiCreditCost(): ?int
    {
        return $this->apiCreditCost;
    }

    /**
     * API Credits Cost for Upscale Variation. Available for Production API Users.
     */
    public function setApiCreditCost(?int $apiCreditCost): self
    {
        $this->initialized['apiCreditCost'] = true;
        $this->apiCreditCost = $apiCreditCost;

        return $this;
    }
}