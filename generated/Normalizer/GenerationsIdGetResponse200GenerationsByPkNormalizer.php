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
    class GenerationsIdGetResponse200GenerationsByPkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPk::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPk::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPk();
            if (\array_key_exists('guidanceScale', $data) && \is_int($data['guidanceScale'])) {
                $data['guidanceScale'] = (float) $data['guidanceScale'];
            }
            if (\array_key_exists('initStrength', $data) && \is_int($data['initStrength'])) {
                $data['initStrength'] = (float) $data['initStrength'];
            }
            if (\array_key_exists('photoRealStrength', $data) && \is_int($data['photoRealStrength'])) {
                $data['photoRealStrength'] = (float) $data['photoRealStrength'];
            }
            if (\array_key_exists('promptMagicStrength', $data) && \is_int($data['promptMagicStrength'])) {
                $data['promptMagicStrength'] = (float) $data['promptMagicStrength'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt($data['createdAt']);
                unset($data['createdAt']);
            }
            if (\array_key_exists('generated_images', $data)) {
                $values = [];
                foreach ($data['generated_images'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGeneratedImagesItem::class, 'json', $context);
                }
                $object->setGeneratedImages($values);
                unset($data['generated_images']);
            }
            if (\array_key_exists('generation_elements', $data)) {
                $values_1 = [];
                foreach ($data['generation_elements'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGenerationElementsItem::class, 'json', $context);
                }
                $object->setGenerationElements($values_1);
                unset($data['generation_elements']);
            }
            if (\array_key_exists('guidanceScale', $data) && $data['guidanceScale'] !== null) {
                $object->setGuidanceScale($data['guidanceScale']);
                unset($data['guidanceScale']);
            } elseif (\array_key_exists('guidanceScale', $data) && $data['guidanceScale'] === null) {
                $object->setGuidanceScale(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('imageHeight', $data)) {
                $object->setImageHeight($data['imageHeight']);
                unset($data['imageHeight']);
            }
            if (\array_key_exists('imageWidth', $data)) {
                $object->setImageWidth($data['imageWidth']);
                unset($data['imageWidth']);
            }
            if (\array_key_exists('inferenceSteps', $data) && $data['inferenceSteps'] !== null) {
                $object->setInferenceSteps($data['inferenceSteps']);
                unset($data['inferenceSteps']);
            } elseif (\array_key_exists('inferenceSteps', $data) && $data['inferenceSteps'] === null) {
                $object->setInferenceSteps(null);
            }
            if (\array_key_exists('initStrength', $data) && $data['initStrength'] !== null) {
                $object->setInitStrength($data['initStrength']);
                unset($data['initStrength']);
            } elseif (\array_key_exists('initStrength', $data) && $data['initStrength'] === null) {
                $object->setInitStrength(null);
            }
            if (\array_key_exists('modelId', $data) && $data['modelId'] !== null) {
                $object->setModelId($data['modelId']);
                unset($data['modelId']);
            } elseif (\array_key_exists('modelId', $data) && $data['modelId'] === null) {
                $object->setModelId(null);
            }
            if (\array_key_exists('negativePrompt', $data) && $data['negativePrompt'] !== null) {
                $object->setNegativePrompt($data['negativePrompt']);
                unset($data['negativePrompt']);
            } elseif (\array_key_exists('negativePrompt', $data) && $data['negativePrompt'] === null) {
                $object->setNegativePrompt(null);
            }
            if (\array_key_exists('photoReal', $data) && $data['photoReal'] !== null) {
                $object->setPhotoReal($data['photoReal']);
                unset($data['photoReal']);
            } elseif (\array_key_exists('photoReal', $data) && $data['photoReal'] === null) {
                $object->setPhotoReal(null);
            }
            if (\array_key_exists('photoRealStrength', $data) && $data['photoRealStrength'] !== null) {
                $object->setPhotoRealStrength($data['photoRealStrength']);
                unset($data['photoRealStrength']);
            } elseif (\array_key_exists('photoRealStrength', $data) && $data['photoRealStrength'] === null) {
                $object->setPhotoRealStrength(null);
            }
            if (\array_key_exists('presetStyle', $data) && $data['presetStyle'] !== null) {
                $object->setPresetStyle($data['presetStyle']);
                unset($data['presetStyle']);
            } elseif (\array_key_exists('presetStyle', $data) && $data['presetStyle'] === null) {
                $object->setPresetStyle(null);
            }
            if (\array_key_exists('prompt', $data)) {
                $object->setPrompt($data['prompt']);
                unset($data['prompt']);
            }
            if (\array_key_exists('promptMagic', $data) && $data['promptMagic'] !== null) {
                $object->setPromptMagic($data['promptMagic']);
                unset($data['promptMagic']);
            } elseif (\array_key_exists('promptMagic', $data) && $data['promptMagic'] === null) {
                $object->setPromptMagic(null);
            }
            if (\array_key_exists('promptMagicStrength', $data) && $data['promptMagicStrength'] !== null) {
                $object->setPromptMagicStrength($data['promptMagicStrength']);
                unset($data['promptMagicStrength']);
            } elseif (\array_key_exists('promptMagicStrength', $data) && $data['promptMagicStrength'] === null) {
                $object->setPromptMagicStrength(null);
            }
            if (\array_key_exists('promptMagicVersion', $data) && $data['promptMagicVersion'] !== null) {
                $object->setPromptMagicVersion($data['promptMagicVersion']);
                unset($data['promptMagicVersion']);
            } elseif (\array_key_exists('promptMagicVersion', $data) && $data['promptMagicVersion'] === null) {
                $object->setPromptMagicVersion(null);
            }
            if (\array_key_exists('public', $data)) {
                $object->setPublic($data['public']);
                unset($data['public']);
            }
            if (\array_key_exists('scheduler', $data)) {
                $object->setScheduler($data['scheduler']);
                unset($data['scheduler']);
            }
            if (\array_key_exists('sdVersion', $data)) {
                $object->setSdVersion($data['sdVersion']);
                unset($data['sdVersion']);
            }
            if (\array_key_exists('seed', $data) && $data['seed'] !== null) {
                $object->setSeed($data['seed']);
                unset($data['seed']);
            } elseif (\array_key_exists('seed', $data) && $data['seed'] === null) {
                $object->setSeed(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('generatedImages') && null !== $object->getGeneratedImages()) {
                $values = [];
                foreach ($object->getGeneratedImages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['generated_images'] = $values;
            }
            if ($object->isInitialized('generationElements') && null !== $object->getGenerationElements()) {
                $values_1 = [];
                foreach ($object->getGenerationElements() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['generation_elements'] = $values_1;
            }
            if ($object->isInitialized('guidanceScale') && null !== $object->getGuidanceScale()) {
                $data['guidanceScale'] = $object->getGuidanceScale();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('imageHeight') && null !== $object->getImageHeight()) {
                $data['imageHeight'] = $object->getImageHeight();
            }
            if ($object->isInitialized('imageWidth') && null !== $object->getImageWidth()) {
                $data['imageWidth'] = $object->getImageWidth();
            }
            if ($object->isInitialized('inferenceSteps') && null !== $object->getInferenceSteps()) {
                $data['inferenceSteps'] = $object->getInferenceSteps();
            }
            if ($object->isInitialized('initStrength') && null !== $object->getInitStrength()) {
                $data['initStrength'] = $object->getInitStrength();
            }
            if ($object->isInitialized('modelId') && null !== $object->getModelId()) {
                $data['modelId'] = $object->getModelId();
            }
            if ($object->isInitialized('negativePrompt') && null !== $object->getNegativePrompt()) {
                $data['negativePrompt'] = $object->getNegativePrompt();
            }
            if ($object->isInitialized('photoReal') && null !== $object->getPhotoReal()) {
                $data['photoReal'] = $object->getPhotoReal();
            }
            if ($object->isInitialized('photoRealStrength') && null !== $object->getPhotoRealStrength()) {
                $data['photoRealStrength'] = $object->getPhotoRealStrength();
            }
            if ($object->isInitialized('presetStyle') && null !== $object->getPresetStyle()) {
                $data['presetStyle'] = $object->getPresetStyle();
            }
            if ($object->isInitialized('prompt') && null !== $object->getPrompt()) {
                $data['prompt'] = $object->getPrompt();
            }
            if ($object->isInitialized('promptMagic') && null !== $object->getPromptMagic()) {
                $data['promptMagic'] = $object->getPromptMagic();
            }
            if ($object->isInitialized('promptMagicStrength') && null !== $object->getPromptMagicStrength()) {
                $data['promptMagicStrength'] = $object->getPromptMagicStrength();
            }
            if ($object->isInitialized('promptMagicVersion') && null !== $object->getPromptMagicVersion()) {
                $data['promptMagicVersion'] = $object->getPromptMagicVersion();
            }
            if ($object->isInitialized('public') && null !== $object->getPublic()) {
                $data['public'] = $object->getPublic();
            }
            if ($object->isInitialized('scheduler') && null !== $object->getScheduler()) {
                $data['scheduler'] = $object->getScheduler();
            }
            if ($object->isInitialized('sdVersion') && null !== $object->getSdVersion()) {
                $data['sdVersion'] = $object->getSdVersion();
            }
            if ($object->isInitialized('seed') && null !== $object->getSeed()) {
                $data['seed'] = $object->getSeed();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPk::class => false];
        }
    }
} else {
    class GenerationsIdGetResponse200GenerationsByPkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPk::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPk::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPk();
            if (\array_key_exists('guidanceScale', $data) && \is_int($data['guidanceScale'])) {
                $data['guidanceScale'] = (float) $data['guidanceScale'];
            }
            if (\array_key_exists('initStrength', $data) && \is_int($data['initStrength'])) {
                $data['initStrength'] = (float) $data['initStrength'];
            }
            if (\array_key_exists('photoRealStrength', $data) && \is_int($data['photoRealStrength'])) {
                $data['photoRealStrength'] = (float) $data['photoRealStrength'];
            }
            if (\array_key_exists('promptMagicStrength', $data) && \is_int($data['promptMagicStrength'])) {
                $data['promptMagicStrength'] = (float) $data['promptMagicStrength'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt($data['createdAt']);
                unset($data['createdAt']);
            }
            if (\array_key_exists('generated_images', $data)) {
                $values = [];
                foreach ($data['generated_images'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGeneratedImagesItem::class, 'json', $context);
                }
                $object->setGeneratedImages($values);
                unset($data['generated_images']);
            }
            if (\array_key_exists('generation_elements', $data)) {
                $values_1 = [];
                foreach ($data['generation_elements'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPkGenerationElementsItem::class, 'json', $context);
                }
                $object->setGenerationElements($values_1);
                unset($data['generation_elements']);
            }
            if (\array_key_exists('guidanceScale', $data) && $data['guidanceScale'] !== null) {
                $object->setGuidanceScale($data['guidanceScale']);
                unset($data['guidanceScale']);
            } elseif (\array_key_exists('guidanceScale', $data) && $data['guidanceScale'] === null) {
                $object->setGuidanceScale(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('imageHeight', $data)) {
                $object->setImageHeight($data['imageHeight']);
                unset($data['imageHeight']);
            }
            if (\array_key_exists('imageWidth', $data)) {
                $object->setImageWidth($data['imageWidth']);
                unset($data['imageWidth']);
            }
            if (\array_key_exists('inferenceSteps', $data) && $data['inferenceSteps'] !== null) {
                $object->setInferenceSteps($data['inferenceSteps']);
                unset($data['inferenceSteps']);
            } elseif (\array_key_exists('inferenceSteps', $data) && $data['inferenceSteps'] === null) {
                $object->setInferenceSteps(null);
            }
            if (\array_key_exists('initStrength', $data) && $data['initStrength'] !== null) {
                $object->setInitStrength($data['initStrength']);
                unset($data['initStrength']);
            } elseif (\array_key_exists('initStrength', $data) && $data['initStrength'] === null) {
                $object->setInitStrength(null);
            }
            if (\array_key_exists('modelId', $data) && $data['modelId'] !== null) {
                $object->setModelId($data['modelId']);
                unset($data['modelId']);
            } elseif (\array_key_exists('modelId', $data) && $data['modelId'] === null) {
                $object->setModelId(null);
            }
            if (\array_key_exists('negativePrompt', $data) && $data['negativePrompt'] !== null) {
                $object->setNegativePrompt($data['negativePrompt']);
                unset($data['negativePrompt']);
            } elseif (\array_key_exists('negativePrompt', $data) && $data['negativePrompt'] === null) {
                $object->setNegativePrompt(null);
            }
            if (\array_key_exists('photoReal', $data) && $data['photoReal'] !== null) {
                $object->setPhotoReal($data['photoReal']);
                unset($data['photoReal']);
            } elseif (\array_key_exists('photoReal', $data) && $data['photoReal'] === null) {
                $object->setPhotoReal(null);
            }
            if (\array_key_exists('photoRealStrength', $data) && $data['photoRealStrength'] !== null) {
                $object->setPhotoRealStrength($data['photoRealStrength']);
                unset($data['photoRealStrength']);
            } elseif (\array_key_exists('photoRealStrength', $data) && $data['photoRealStrength'] === null) {
                $object->setPhotoRealStrength(null);
            }
            if (\array_key_exists('presetStyle', $data) && $data['presetStyle'] !== null) {
                $object->setPresetStyle($data['presetStyle']);
                unset($data['presetStyle']);
            } elseif (\array_key_exists('presetStyle', $data) && $data['presetStyle'] === null) {
                $object->setPresetStyle(null);
            }
            if (\array_key_exists('prompt', $data)) {
                $object->setPrompt($data['prompt']);
                unset($data['prompt']);
            }
            if (\array_key_exists('promptMagic', $data) && $data['promptMagic'] !== null) {
                $object->setPromptMagic($data['promptMagic']);
                unset($data['promptMagic']);
            } elseif (\array_key_exists('promptMagic', $data) && $data['promptMagic'] === null) {
                $object->setPromptMagic(null);
            }
            if (\array_key_exists('promptMagicStrength', $data) && $data['promptMagicStrength'] !== null) {
                $object->setPromptMagicStrength($data['promptMagicStrength']);
                unset($data['promptMagicStrength']);
            } elseif (\array_key_exists('promptMagicStrength', $data) && $data['promptMagicStrength'] === null) {
                $object->setPromptMagicStrength(null);
            }
            if (\array_key_exists('promptMagicVersion', $data) && $data['promptMagicVersion'] !== null) {
                $object->setPromptMagicVersion($data['promptMagicVersion']);
                unset($data['promptMagicVersion']);
            } elseif (\array_key_exists('promptMagicVersion', $data) && $data['promptMagicVersion'] === null) {
                $object->setPromptMagicVersion(null);
            }
            if (\array_key_exists('public', $data)) {
                $object->setPublic($data['public']);
                unset($data['public']);
            }
            if (\array_key_exists('scheduler', $data)) {
                $object->setScheduler($data['scheduler']);
                unset($data['scheduler']);
            }
            if (\array_key_exists('sdVersion', $data)) {
                $object->setSdVersion($data['sdVersion']);
                unset($data['sdVersion']);
            }
            if (\array_key_exists('seed', $data) && $data['seed'] !== null) {
                $object->setSeed($data['seed']);
                unset($data['seed']);
            } elseif (\array_key_exists('seed', $data) && $data['seed'] === null) {
                $object->setSeed(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('generatedImages') && null !== $object->getGeneratedImages()) {
                $values = [];
                foreach ($object->getGeneratedImages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['generated_images'] = $values;
            }
            if ($object->isInitialized('generationElements') && null !== $object->getGenerationElements()) {
                $values_1 = [];
                foreach ($object->getGenerationElements() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['generation_elements'] = $values_1;
            }
            if ($object->isInitialized('guidanceScale') && null !== $object->getGuidanceScale()) {
                $data['guidanceScale'] = $object->getGuidanceScale();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('imageHeight') && null !== $object->getImageHeight()) {
                $data['imageHeight'] = $object->getImageHeight();
            }
            if ($object->isInitialized('imageWidth') && null !== $object->getImageWidth()) {
                $data['imageWidth'] = $object->getImageWidth();
            }
            if ($object->isInitialized('inferenceSteps') && null !== $object->getInferenceSteps()) {
                $data['inferenceSteps'] = $object->getInferenceSteps();
            }
            if ($object->isInitialized('initStrength') && null !== $object->getInitStrength()) {
                $data['initStrength'] = $object->getInitStrength();
            }
            if ($object->isInitialized('modelId') && null !== $object->getModelId()) {
                $data['modelId'] = $object->getModelId();
            }
            if ($object->isInitialized('negativePrompt') && null !== $object->getNegativePrompt()) {
                $data['negativePrompt'] = $object->getNegativePrompt();
            }
            if ($object->isInitialized('photoReal') && null !== $object->getPhotoReal()) {
                $data['photoReal'] = $object->getPhotoReal();
            }
            if ($object->isInitialized('photoRealStrength') && null !== $object->getPhotoRealStrength()) {
                $data['photoRealStrength'] = $object->getPhotoRealStrength();
            }
            if ($object->isInitialized('presetStyle') && null !== $object->getPresetStyle()) {
                $data['presetStyle'] = $object->getPresetStyle();
            }
            if ($object->isInitialized('prompt') && null !== $object->getPrompt()) {
                $data['prompt'] = $object->getPrompt();
            }
            if ($object->isInitialized('promptMagic') && null !== $object->getPromptMagic()) {
                $data['promptMagic'] = $object->getPromptMagic();
            }
            if ($object->isInitialized('promptMagicStrength') && null !== $object->getPromptMagicStrength()) {
                $data['promptMagicStrength'] = $object->getPromptMagicStrength();
            }
            if ($object->isInitialized('promptMagicVersion') && null !== $object->getPromptMagicVersion()) {
                $data['promptMagicVersion'] = $object->getPromptMagicVersion();
            }
            if ($object->isInitialized('public') && null !== $object->getPublic()) {
                $data['public'] = $object->getPublic();
            }
            if ($object->isInitialized('scheduler') && null !== $object->getScheduler()) {
                $data['scheduler'] = $object->getScheduler();
            }
            if ($object->isInitialized('sdVersion') && null !== $object->getSdVersion()) {
                $data['sdVersion'] = $object->getSdVersion();
            }
            if ($object->isInitialized('seed') && null !== $object->getSeed()) {
                $data['seed'] = $object->getSeed();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\LeonardoAI\Generated\Model\GenerationsIdGetResponse200GenerationsByPk::class => false];
        }
    }
}
