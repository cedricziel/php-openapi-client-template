<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class LcmInstantRefinePostResponse200 extends \ArrayObject
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
     * @var LcmInstantRefinePostResponse200LcmGenerationJob|null
     */
    protected $lcmGenerationJob;

    public function getLcmGenerationJob(): ?LcmInstantRefinePostResponse200LcmGenerationJob
    {
        return $this->lcmGenerationJob;
    }

    public function setLcmGenerationJob(?LcmInstantRefinePostResponse200LcmGenerationJob $lcmGenerationJob): self
    {
        $this->initialized['lcmGenerationJob'] = true;
        $this->lcmGenerationJob = $lcmGenerationJob;

        return $this;
    }
}
