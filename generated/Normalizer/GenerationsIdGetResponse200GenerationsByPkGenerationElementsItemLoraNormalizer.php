<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Normalizer;

use CedricZiel\LeonardoAI\Generated\Runtime\Normalizer\CheckArray;
use CedricZiel\LeonardoAI\Generated\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GenerationsIdGetResponse200GenerationsByPkGenerationElementsItemLoraNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGenerationElementsItemLora::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGenerationElementsItemLora::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGenerationElementsItemLora();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('akUUID', $data) && $data['akUUID'] !== null) {
                $object->setAkUUID($data['akUUID']);
                unset($data['akUUID']);
            } elseif (\array_key_exists('akUUID', $data) && $data['akUUID'] === null) {
                $object->setAkUUID(null);
            }
            if (\array_key_exists('baseModel', $data)) {
                $object->setBaseModel($data['baseModel']);
                unset($data['baseModel']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('urlImage', $data) && $data['urlImage'] !== null) {
                $object->setUrlImage($data['urlImage']);
                unset($data['urlImage']);
            } elseif (\array_key_exists('urlImage', $data) && $data['urlImage'] === null) {
                $object->setUrlImage(null);
            }
            if (\array_key_exists('weightDefault', $data) && $data['weightDefault'] !== null) {
                $object->setWeightDefault($data['weightDefault']);
                unset($data['weightDefault']);
            } elseif (\array_key_exists('weightDefault', $data) && $data['weightDefault'] === null) {
                $object->setWeightDefault(null);
            }
            if (\array_key_exists('weightMax', $data) && $data['weightMax'] !== null) {
                $object->setWeightMax($data['weightMax']);
                unset($data['weightMax']);
            } elseif (\array_key_exists('weightMax', $data) && $data['weightMax'] === null) {
                $object->setWeightMax(null);
            }
            if (\array_key_exists('weightMin', $data) && $data['weightMin'] !== null) {
                $object->setWeightMin($data['weightMin']);
                unset($data['weightMin']);
            } elseif (\array_key_exists('weightMin', $data) && $data['weightMin'] === null) {
                $object->setWeightMin(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('akUUID') && null !== $object->getAkUUID()) {
                $data['akUUID'] = $object->getAkUUID();
            }
            if ($object->isInitialized('baseModel') && null !== $object->getBaseModel()) {
                $data['baseModel'] = $object->getBaseModel();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('urlImage') && null !== $object->getUrlImage()) {
                $data['urlImage'] = $object->getUrlImage();
            }
            if ($object->isInitialized('weightDefault') && null !== $object->getWeightDefault()) {
                $data['weightDefault'] = $object->getWeightDefault();
            }
            if ($object->isInitialized('weightMax') && null !== $object->getWeightMax()) {
                $data['weightMax'] = $object->getWeightMax();
            }
            if ($object->isInitialized('weightMin') && null !== $object->getWeightMin()) {
                $data['weightMin'] = $object->getWeightMin();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGenerationElementsItemLora::class => false];
        }
    }
} else {
    class GenerationsIdGetResponse200GenerationsByPkGenerationElementsItemLoraNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGenerationElementsItemLora::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGenerationElementsItemLora::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGenerationElementsItemLora();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('akUUID', $data) && $data['akUUID'] !== null) {
                $object->setAkUUID($data['akUUID']);
                unset($data['akUUID']);
            } elseif (\array_key_exists('akUUID', $data) && $data['akUUID'] === null) {
                $object->setAkUUID(null);
            }
            if (\array_key_exists('baseModel', $data)) {
                $object->setBaseModel($data['baseModel']);
                unset($data['baseModel']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('urlImage', $data) && $data['urlImage'] !== null) {
                $object->setUrlImage($data['urlImage']);
                unset($data['urlImage']);
            } elseif (\array_key_exists('urlImage', $data) && $data['urlImage'] === null) {
                $object->setUrlImage(null);
            }
            if (\array_key_exists('weightDefault', $data) && $data['weightDefault'] !== null) {
                $object->setWeightDefault($data['weightDefault']);
                unset($data['weightDefault']);
            } elseif (\array_key_exists('weightDefault', $data) && $data['weightDefault'] === null) {
                $object->setWeightDefault(null);
            }
            if (\array_key_exists('weightMax', $data) && $data['weightMax'] !== null) {
                $object->setWeightMax($data['weightMax']);
                unset($data['weightMax']);
            } elseif (\array_key_exists('weightMax', $data) && $data['weightMax'] === null) {
                $object->setWeightMax(null);
            }
            if (\array_key_exists('weightMin', $data) && $data['weightMin'] !== null) {
                $object->setWeightMin($data['weightMin']);
                unset($data['weightMin']);
            } elseif (\array_key_exists('weightMin', $data) && $data['weightMin'] === null) {
                $object->setWeightMin(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('akUUID') && null !== $object->getAkUUID()) {
                $data['akUUID'] = $object->getAkUUID();
            }
            if ($object->isInitialized('baseModel') && null !== $object->getBaseModel()) {
                $data['baseModel'] = $object->getBaseModel();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('urlImage') && null !== $object->getUrlImage()) {
                $data['urlImage'] = $object->getUrlImage();
            }
            if ($object->isInitialized('weightDefault') && null !== $object->getWeightDefault()) {
                $data['weightDefault'] = $object->getWeightDefault();
            }
            if ($object->isInitialized('weightMax') && null !== $object->getWeightMax()) {
                $data['weightMax'] = $object->getWeightMax();
            }
            if ($object->isInitialized('weightMin') && null !== $object->getWeightMin()) {
                $data['weightMin'] = $object->getWeightMin();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGenerationElementsItemLora::class => false];
        }
    }
}
