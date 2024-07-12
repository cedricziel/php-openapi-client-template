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
    class Models3dUserUserIdGetResponse200ModelAssetsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetResponse200ModelAssetsItem::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetResponse200ModelAssetsItem::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetResponse200ModelAssetsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt($data['createdAt']);
                unset($data['createdAt']);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('meshUrl', $data)) {
                $object->setMeshUrl($data['meshUrl']);
                unset($data['meshUrl']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('updatedAt', $data)) {
                $object->setUpdatedAt($data['updatedAt']);
                unset($data['updatedAt']);
            }
            if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
                $object->setUserId($data['userId']);
                unset($data['userId']);
            } elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
                $object->setUserId(null);
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
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['createdAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('meshUrl') && null !== $object->getMeshUrl()) {
                $data['meshUrl'] = $object->getMeshUrl();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updatedAt'] = $object->getUpdatedAt();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['userId'] = $object->getUserId();
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
            return [\CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetResponse200ModelAssetsItem::class => false];
        }
    }
} else {
    class Models3dUserUserIdGetResponse200ModelAssetsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetResponse200ModelAssetsItem::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetResponse200ModelAssetsItem::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetResponse200ModelAssetsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt($data['createdAt']);
                unset($data['createdAt']);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('meshUrl', $data)) {
                $object->setMeshUrl($data['meshUrl']);
                unset($data['meshUrl']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('updatedAt', $data)) {
                $object->setUpdatedAt($data['updatedAt']);
                unset($data['updatedAt']);
            }
            if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
                $object->setUserId($data['userId']);
                unset($data['userId']);
            } elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
                $object->setUserId(null);
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
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['createdAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('meshUrl') && null !== $object->getMeshUrl()) {
                $data['meshUrl'] = $object->getMeshUrl();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updatedAt'] = $object->getUpdatedAt();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['userId'] = $object->getUserId();
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
            return [\CedricZiel\LeonardoAI\Generated\Model\Models3dUserUserIdGetResponse200ModelAssetsItem::class => false];
        }
    }
}
