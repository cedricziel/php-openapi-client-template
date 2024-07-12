<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class PromptRandomPostResponse200 extends \ArrayObject
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
     * @var PromptRandomPostResponse200PromptGeneration
     */
    protected $promptGeneration;

    public function getPromptGeneration(): PromptRandomPostResponse200PromptGeneration
    {
        return $this->promptGeneration;
    }

    public function setPromptGeneration(PromptRandomPostResponse200PromptGeneration $promptGeneration): self
    {
        $this->initialized['promptGeneration'] = true;
        $this->promptGeneration = $promptGeneration;

        return $this;
    }
}