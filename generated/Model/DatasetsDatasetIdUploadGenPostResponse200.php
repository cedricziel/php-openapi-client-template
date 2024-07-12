<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class DatasetsDatasetIdUploadGenPostResponse200 extends \ArrayObject
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
     * @var DatasetsDatasetIdUploadGenPostResponse200UploadDatasetImageFromGen|null
     */
    protected $uploadDatasetImageFromGen;

    public function getUploadDatasetImageFromGen(): ?DatasetsDatasetIdUploadGenPostResponse200UploadDatasetImageFromGen
    {
        return $this->uploadDatasetImageFromGen;
    }

    public function setUploadDatasetImageFromGen(?DatasetsDatasetIdUploadGenPostResponse200UploadDatasetImageFromGen $uploadDatasetImageFromGen): self
    {
        $this->initialized['uploadDatasetImageFromGen'] = true;
        $this->uploadDatasetImageFromGen = $uploadDatasetImageFromGen;

        return $this;
    }
}
