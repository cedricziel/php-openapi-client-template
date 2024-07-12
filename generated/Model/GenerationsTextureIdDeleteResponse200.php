<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class GenerationsTextureIdDeleteResponse200 extends \ArrayObject
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
     * columns and relationships of "model_asset_texture_generations".
     *
     * @var GenerationsTextureIdDeleteResponse200DeleteModelAssetTextureGenerationsByPk|null
     */
    protected $deleteModelAssetTextureGenerationsByPk;

    /**
     * columns and relationships of "model_asset_texture_generations".
     */
    public function getDeleteModelAssetTextureGenerationsByPk(): ?GenerationsTextureIdDeleteResponse200DeleteModelAssetTextureGenerationsByPk
    {
        return $this->deleteModelAssetTextureGenerationsByPk;
    }

    /**
     * columns and relationships of "model_asset_texture_generations".
     */
    public function setDeleteModelAssetTextureGenerationsByPk(?GenerationsTextureIdDeleteResponse200DeleteModelAssetTextureGenerationsByPk $deleteModelAssetTextureGenerationsByPk): self
    {
        $this->initialized['deleteModelAssetTextureGenerationsByPk'] = true;
        $this->deleteModelAssetTextureGenerationsByPk = $deleteModelAssetTextureGenerationsByPk;

        return $this;
    }
}