<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class Models3dUploadPostResponse200 extends \ArrayObject
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
     * @var Models3dUploadPostResponse200UploadModelAsset|null
     */
    protected $uploadModelAsset;

    public function getUploadModelAsset(): ?Models3dUploadPostResponse200UploadModelAsset
    {
        return $this->uploadModelAsset;
    }

    public function setUploadModelAsset(?Models3dUploadPostResponse200UploadModelAsset $uploadModelAsset): self
    {
        $this->initialized['uploadModelAsset'] = true;
        $this->uploadModelAsset = $uploadModelAsset;

        return $this;
    }
}
