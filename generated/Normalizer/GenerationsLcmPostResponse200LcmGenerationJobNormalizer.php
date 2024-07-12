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
    class GenerationsLcmPostResponse200LcmGenerationJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\GenerationsLcmPostResponse200LcmGenerationJob::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\GenerationsLcmPostResponse200LcmGenerationJob::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\GenerationsLcmPostResponse200LcmGenerationJob();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('imageDataUrl', $data)) {
                $values = [];
                foreach ($data['imageDataUrl'] as $value) {
                    $values[] = $value;
                }
                $object->setImageDataUrl($values);
                unset($data['imageDataUrl']);
            }
            if (\array_key_exists('requestTimestamp', $data)) {
                $object->setRequestTimestamp($data['requestTimestamp']);
                unset($data['requestTimestamp']);
            }
            if (\array_key_exists('apiCreditCost', $data) && $data['apiCreditCost'] !== null) {
                $object->setApiCreditCost($data['apiCreditCost']);
                unset($data['apiCreditCost']);
            } elseif (\array_key_exists('apiCreditCost', $data) && $data['apiCreditCost'] === null) {
                $object->setApiCreditCost(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('imageDataUrl') && null !== $object->getImageDataUrl()) {
                $values = [];
                foreach ($object->getImageDataUrl() as $value) {
                    $values[] = $value;
                }
                $data['imageDataUrl'] = $values;
            }
            if ($object->isInitialized('requestTimestamp') && null !== $object->getRequestTimestamp()) {
                $data['requestTimestamp'] = $object->getRequestTimestamp();
            }
            if ($object->isInitialized('apiCreditCost') && null !== $object->getApiCreditCost()) {
                $data['apiCreditCost'] = $object->getApiCreditCost();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\LeonardoAI\Generated\Model\GenerationsLcmPostResponse200LcmGenerationJob::class => false];
        }
    }
} else {
    class GenerationsLcmPostResponse200LcmGenerationJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\GenerationsLcmPostResponse200LcmGenerationJob::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\GenerationsLcmPostResponse200LcmGenerationJob::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\GenerationsLcmPostResponse200LcmGenerationJob();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('imageDataUrl', $data)) {
                $values = [];
                foreach ($data['imageDataUrl'] as $value) {
                    $values[] = $value;
                }
                $object->setImageDataUrl($values);
                unset($data['imageDataUrl']);
            }
            if (\array_key_exists('requestTimestamp', $data)) {
                $object->setRequestTimestamp($data['requestTimestamp']);
                unset($data['requestTimestamp']);
            }
            if (\array_key_exists('apiCreditCost', $data) && $data['apiCreditCost'] !== null) {
                $object->setApiCreditCost($data['apiCreditCost']);
                unset($data['apiCreditCost']);
            } elseif (\array_key_exists('apiCreditCost', $data) && $data['apiCreditCost'] === null) {
                $object->setApiCreditCost(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('imageDataUrl') && null !== $object->getImageDataUrl()) {
                $values = [];
                foreach ($object->getImageDataUrl() as $value) {
                    $values[] = $value;
                }
                $data['imageDataUrl'] = $values;
            }
            if ($object->isInitialized('requestTimestamp') && null !== $object->getRequestTimestamp()) {
                $data['requestTimestamp'] = $object->getRequestTimestamp();
            }
            if ($object->isInitialized('apiCreditCost') && null !== $object->getApiCreditCost()) {
                $data['apiCreditCost'] = $object->getApiCreditCost();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\LeonardoAI\Generated\Model\GenerationsLcmPostResponse200LcmGenerationJob::class => false];
        }
    }
}
