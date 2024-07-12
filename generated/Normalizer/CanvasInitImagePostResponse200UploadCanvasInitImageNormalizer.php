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
    class CanvasInitImagePostResponse200UploadCanvasInitImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\CanvasInitImagePostResponse200UploadCanvasInitImage::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\CanvasInitImagePostResponse200UploadCanvasInitImage::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\CanvasInitImagePostResponse200UploadCanvasInitImage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('initImageId', $data) && $data['initImageId'] !== null) {
                $object->setInitImageId($data['initImageId']);
                unset($data['initImageId']);
            } elseif (\array_key_exists('initImageId', $data) && $data['initImageId'] === null) {
                $object->setInitImageId(null);
            }
            if (\array_key_exists('initFields', $data) && $data['initFields'] !== null) {
                $object->setInitFields($data['initFields']);
                unset($data['initFields']);
            } elseif (\array_key_exists('initFields', $data) && $data['initFields'] === null) {
                $object->setInitFields(null);
            }
            if (\array_key_exists('initKey', $data) && $data['initKey'] !== null) {
                $object->setInitKey($data['initKey']);
                unset($data['initKey']);
            } elseif (\array_key_exists('initKey', $data) && $data['initKey'] === null) {
                $object->setInitKey(null);
            }
            if (\array_key_exists('initUrl', $data) && $data['initUrl'] !== null) {
                $object->setInitUrl($data['initUrl']);
                unset($data['initUrl']);
            } elseif (\array_key_exists('initUrl', $data) && $data['initUrl'] === null) {
                $object->setInitUrl(null);
            }
            if (\array_key_exists('maskImageId', $data) && $data['maskImageId'] !== null) {
                $object->setMaskImageId($data['maskImageId']);
                unset($data['maskImageId']);
            } elseif (\array_key_exists('maskImageId', $data) && $data['maskImageId'] === null) {
                $object->setMaskImageId(null);
            }
            if (\array_key_exists('maskFields', $data) && $data['maskFields'] !== null) {
                $object->setMaskFields($data['maskFields']);
                unset($data['maskFields']);
            } elseif (\array_key_exists('maskFields', $data) && $data['maskFields'] === null) {
                $object->setMaskFields(null);
            }
            if (\array_key_exists('maskKey', $data) && $data['maskKey'] !== null) {
                $object->setMaskKey($data['maskKey']);
                unset($data['maskKey']);
            } elseif (\array_key_exists('maskKey', $data) && $data['maskKey'] === null) {
                $object->setMaskKey(null);
            }
            if (\array_key_exists('maskUrl', $data) && $data['maskUrl'] !== null) {
                $object->setMaskUrl($data['maskUrl']);
                unset($data['maskUrl']);
            } elseif (\array_key_exists('maskUrl', $data) && $data['maskUrl'] === null) {
                $object->setMaskUrl(null);
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
            if ($object->isInitialized('initImageId') && null !== $object->getInitImageId()) {
                $data['initImageId'] = $object->getInitImageId();
            }
            if ($object->isInitialized('initFields') && null !== $object->getInitFields()) {
                $data['initFields'] = $object->getInitFields();
            }
            if ($object->isInitialized('initKey') && null !== $object->getInitKey()) {
                $data['initKey'] = $object->getInitKey();
            }
            if ($object->isInitialized('initUrl') && null !== $object->getInitUrl()) {
                $data['initUrl'] = $object->getInitUrl();
            }
            if ($object->isInitialized('maskImageId') && null !== $object->getMaskImageId()) {
                $data['maskImageId'] = $object->getMaskImageId();
            }
            if ($object->isInitialized('maskFields') && null !== $object->getMaskFields()) {
                $data['maskFields'] = $object->getMaskFields();
            }
            if ($object->isInitialized('maskKey') && null !== $object->getMaskKey()) {
                $data['maskKey'] = $object->getMaskKey();
            }
            if ($object->isInitialized('maskUrl') && null !== $object->getMaskUrl()) {
                $data['maskUrl'] = $object->getMaskUrl();
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
            return [\CedricZiel\LeonardoAI\Generated\Model\CanvasInitImagePostResponse200UploadCanvasInitImage::class => false];
        }
    }
} else {
    class CanvasInitImagePostResponse200UploadCanvasInitImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\CanvasInitImagePostResponse200UploadCanvasInitImage::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\CanvasInitImagePostResponse200UploadCanvasInitImage::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\CanvasInitImagePostResponse200UploadCanvasInitImage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('initImageId', $data) && $data['initImageId'] !== null) {
                $object->setInitImageId($data['initImageId']);
                unset($data['initImageId']);
            } elseif (\array_key_exists('initImageId', $data) && $data['initImageId'] === null) {
                $object->setInitImageId(null);
            }
            if (\array_key_exists('initFields', $data) && $data['initFields'] !== null) {
                $object->setInitFields($data['initFields']);
                unset($data['initFields']);
            } elseif (\array_key_exists('initFields', $data) && $data['initFields'] === null) {
                $object->setInitFields(null);
            }
            if (\array_key_exists('initKey', $data) && $data['initKey'] !== null) {
                $object->setInitKey($data['initKey']);
                unset($data['initKey']);
            } elseif (\array_key_exists('initKey', $data) && $data['initKey'] === null) {
                $object->setInitKey(null);
            }
            if (\array_key_exists('initUrl', $data) && $data['initUrl'] !== null) {
                $object->setInitUrl($data['initUrl']);
                unset($data['initUrl']);
            } elseif (\array_key_exists('initUrl', $data) && $data['initUrl'] === null) {
                $object->setInitUrl(null);
            }
            if (\array_key_exists('maskImageId', $data) && $data['maskImageId'] !== null) {
                $object->setMaskImageId($data['maskImageId']);
                unset($data['maskImageId']);
            } elseif (\array_key_exists('maskImageId', $data) && $data['maskImageId'] === null) {
                $object->setMaskImageId(null);
            }
            if (\array_key_exists('maskFields', $data) && $data['maskFields'] !== null) {
                $object->setMaskFields($data['maskFields']);
                unset($data['maskFields']);
            } elseif (\array_key_exists('maskFields', $data) && $data['maskFields'] === null) {
                $object->setMaskFields(null);
            }
            if (\array_key_exists('maskKey', $data) && $data['maskKey'] !== null) {
                $object->setMaskKey($data['maskKey']);
                unset($data['maskKey']);
            } elseif (\array_key_exists('maskKey', $data) && $data['maskKey'] === null) {
                $object->setMaskKey(null);
            }
            if (\array_key_exists('maskUrl', $data) && $data['maskUrl'] !== null) {
                $object->setMaskUrl($data['maskUrl']);
                unset($data['maskUrl']);
            } elseif (\array_key_exists('maskUrl', $data) && $data['maskUrl'] === null) {
                $object->setMaskUrl(null);
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
            if ($object->isInitialized('initImageId') && null !== $object->getInitImageId()) {
                $data['initImageId'] = $object->getInitImageId();
            }
            if ($object->isInitialized('initFields') && null !== $object->getInitFields()) {
                $data['initFields'] = $object->getInitFields();
            }
            if ($object->isInitialized('initKey') && null !== $object->getInitKey()) {
                $data['initKey'] = $object->getInitKey();
            }
            if ($object->isInitialized('initUrl') && null !== $object->getInitUrl()) {
                $data['initUrl'] = $object->getInitUrl();
            }
            if ($object->isInitialized('maskImageId') && null !== $object->getMaskImageId()) {
                $data['maskImageId'] = $object->getMaskImageId();
            }
            if ($object->isInitialized('maskFields') && null !== $object->getMaskFields()) {
                $data['maskFields'] = $object->getMaskFields();
            }
            if ($object->isInitialized('maskKey') && null !== $object->getMaskKey()) {
                $data['maskKey'] = $object->getMaskKey();
            }
            if ($object->isInitialized('maskUrl') && null !== $object->getMaskUrl()) {
                $data['maskUrl'] = $object->getMaskUrl();
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
            return [\CedricZiel\LeonardoAI\Generated\Model\CanvasInitImagePostResponse200UploadCanvasInitImage::class => false];
        }
    }
}
