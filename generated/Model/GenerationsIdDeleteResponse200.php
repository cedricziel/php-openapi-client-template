<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class GenerationsIdDeleteResponse200 extends \ArrayObject
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
     * columns and relationships of "generations".
     *
     * @var GenerationsIdDeleteResponse200DeleteGenerationsByPk|null
     */
    protected $deleteGenerationsByPk;

    /**
     * columns and relationships of "generations".
     */
    public function getDeleteGenerationsByPk(): ?GenerationsIdDeleteResponse200DeleteGenerationsByPk
    {
        return $this->deleteGenerationsByPk;
    }

    /**
     * columns and relationships of "generations".
     */
    public function setDeleteGenerationsByPk(?GenerationsIdDeleteResponse200DeleteGenerationsByPk $deleteGenerationsByPk): self
    {
        $this->initialized['deleteGenerationsByPk'] = true;
        $this->deleteGenerationsByPk = $deleteGenerationsByPk;

        return $this;
    }
}
