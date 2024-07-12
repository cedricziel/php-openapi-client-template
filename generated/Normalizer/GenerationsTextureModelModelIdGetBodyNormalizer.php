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
    class GenerationsTextureModelModelIdGetBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\GenerationsTextureModelModelIdGetBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\GenerationsTextureModelModelIdGetBody::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\GenerationsTextureModelModelIdGetBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            } elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
                $object->setLimit(null);
            }
            if (\array_key_exists('modelId', $data) && $data['modelId'] !== null) {
                $object->setModelId($data['modelId']);
                unset($data['modelId']);
            } elseif (\array_key_exists('modelId', $data) && $data['modelId'] === null) {
                $object->setModelId(null);
            }
            if (\array_key_exists('offset', $data) && $data['offset'] !== null) {
                $object->setOffset($data['offset']);
                unset($data['offset']);
            } elseif (\array_key_exists('offset', $data) && $data['offset'] === null) {
                $object->setOffset(null);
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
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('modelId') && null !== $object->getModelId()) {
                $data['modelId'] = $object->getModelId();
            }
            if ($object->isInitialized('offset') && null !== $object->getOffset()) {
                $data['offset'] = $object->getOffset();
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
            return [\CedricZiel\LeonardoAI\Generated\Model\GenerationsTextureModelModelIdGetBody::class => false];
        }
    }
} else {
    class GenerationsTextureModelModelIdGetBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\GenerationsTextureModelModelIdGetBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\GenerationsTextureModelModelIdGetBody::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\GenerationsTextureModelModelIdGetBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            } elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
                $object->setLimit(null);
            }
            if (\array_key_exists('modelId', $data) && $data['modelId'] !== null) {
                $object->setModelId($data['modelId']);
                unset($data['modelId']);
            } elseif (\array_key_exists('modelId', $data) && $data['modelId'] === null) {
                $object->setModelId(null);
            }
            if (\array_key_exists('offset', $data) && $data['offset'] !== null) {
                $object->setOffset($data['offset']);
                unset($data['offset']);
            } elseif (\array_key_exists('offset', $data) && $data['offset'] === null) {
                $object->setOffset(null);
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
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('modelId') && null !== $object->getModelId()) {
                $data['modelId'] = $object->getModelId();
            }
            if ($object->isInitialized('offset') && null !== $object->getOffset()) {
                $data['offset'] = $object->getOffset();
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
            return [\CedricZiel\LeonardoAI\Generated\Model\GenerationsTextureModelModelIdGetBody::class => false];
        }
    }
}
