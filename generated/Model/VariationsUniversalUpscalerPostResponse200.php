<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class VariationsUniversalUpscalerPostResponse200 extends \ArrayObject
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
     * @var VariationsUniversalUpscalerPostResponse200UniversalUpscaler
     */
    protected $universalUpscaler;

    public function getUniversalUpscaler(): VariationsUniversalUpscalerPostResponse200UniversalUpscaler
    {
        return $this->universalUpscaler;
    }

    public function setUniversalUpscaler(VariationsUniversalUpscalerPostResponse200UniversalUpscaler $universalUpscaler): self
    {
        $this->initialized['universalUpscaler'] = true;
        $this->universalUpscaler = $universalUpscaler;

        return $this;
    }
}
