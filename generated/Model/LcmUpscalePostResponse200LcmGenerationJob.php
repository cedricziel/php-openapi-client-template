<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class LcmUpscalePostResponse200LcmGenerationJob extends \ArrayObject
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
     * @var list<string>
     */
    protected $imageDataUrl;
    /**
     * @var list<string>
     */
    protected $generationId;
    /**
     * @var list<string>
     */
    protected $variationId;
    /**
     * @var string
     */
    protected $generatedImageId;
    /**
     * @var string
     */
    protected $requestTimestamp;
    /**
     * API credits cost, available for Production API users.
     *
     * @var int|null
     */
    protected $apiCreditCost;

    /**
     * @return list<string>
     */
    public function getImageDataUrl(): array
    {
        return $this->imageDataUrl;
    }

    /**
     * @param list<string> $imageDataUrl
     */
    public function setImageDataUrl(array $imageDataUrl): self
    {
        $this->initialized['imageDataUrl'] = true;
        $this->imageDataUrl = $imageDataUrl;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getGenerationId(): array
    {
        return $this->generationId;
    }

    /**
     * @param list<string> $generationId
     */
    public function setGenerationId(array $generationId): self
    {
        $this->initialized['generationId'] = true;
        $this->generationId = $generationId;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getVariationId(): array
    {
        return $this->variationId;
    }

    /**
     * @param list<string> $variationId
     */
    public function setVariationId(array $variationId): self
    {
        $this->initialized['variationId'] = true;
        $this->variationId = $variationId;

        return $this;
    }

    public function getGeneratedImageId(): string
    {
        return $this->generatedImageId;
    }

    public function setGeneratedImageId(string $generatedImageId): self
    {
        $this->initialized['generatedImageId'] = true;
        $this->generatedImageId = $generatedImageId;

        return $this;
    }

    public function getRequestTimestamp(): string
    {
        return $this->requestTimestamp;
    }

    public function setRequestTimestamp(string $requestTimestamp): self
    {
        $this->initialized['requestTimestamp'] = true;
        $this->requestTimestamp = $requestTimestamp;

        return $this;
    }

    /**
     * API credits cost, available for Production API users.
     */
    public function getApiCreditCost(): ?int
    {
        return $this->apiCreditCost;
    }

    /**
     * API credits cost, available for Production API users.
     */
    public function setApiCreditCost(?int $apiCreditCost): self
    {
        $this->initialized['apiCreditCost'] = true;
        $this->apiCreditCost = $apiCreditCost;

        return $this;
    }
}