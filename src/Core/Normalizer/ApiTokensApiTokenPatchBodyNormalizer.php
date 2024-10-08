<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use KatapultAPI\Core\Runtime\Normalizer\CheckArray;
use KatapultAPI\Core\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ApiTokensApiTokenPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\ApiTokensApiTokenPatchBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\ApiTokensApiTokenPatchBody::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\ApiTokensApiTokenPatchBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('api_token', $data)) {
                $object->setApiToken($this->denormalizer->denormalize($data['api_token'], \KatapultAPI\Core\Model\APITokenLookup::class, 'json', $context));
                unset($data['api_token']);
            }
            if (\array_key_exists('properties', $data)) {
                $object->setProperties($this->denormalizer->denormalize($data['properties'], \KatapultAPI\Core\Model\APITokenArguments::class, 'json', $context));
                unset($data['properties']);
            }
            if (\array_key_exists('annotations', $data)) {
                $values = [];
                foreach ($data['annotations'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \KatapultAPI\Core\Model\KeyValue::class, 'json', $context);
                }
                $object->setAnnotations($values);
                unset($data['annotations']);
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
            $data['api_token'] = $this->normalizer->normalize($object->getApiToken(), 'json', $context);
            $data['properties'] = $this->normalizer->normalize($object->getProperties(), 'json', $context);
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values = [];
                foreach ($object->getAnnotations() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['annotations'] = $values;
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
            return [\KatapultAPI\Core\Model\ApiTokensApiTokenPatchBody::class => false];
        }
    }
} else {
    class ApiTokensApiTokenPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\ApiTokensApiTokenPatchBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\ApiTokensApiTokenPatchBody::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\ApiTokensApiTokenPatchBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('api_token', $data)) {
                $object->setApiToken($this->denormalizer->denormalize($data['api_token'], \KatapultAPI\Core\Model\APITokenLookup::class, 'json', $context));
                unset($data['api_token']);
            }
            if (\array_key_exists('properties', $data)) {
                $object->setProperties($this->denormalizer->denormalize($data['properties'], \KatapultAPI\Core\Model\APITokenArguments::class, 'json', $context));
                unset($data['properties']);
            }
            if (\array_key_exists('annotations', $data)) {
                $values = [];
                foreach ($data['annotations'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \KatapultAPI\Core\Model\KeyValue::class, 'json', $context);
                }
                $object->setAnnotations($values);
                unset($data['annotations']);
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
            $data['api_token'] = $this->normalizer->normalize($object->getApiToken(), 'json', $context);
            $data['properties'] = $this->normalizer->normalize($object->getProperties(), 'json', $context);
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values = [];
                foreach ($object->getAnnotations() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['annotations'] = $values;
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
            return [\KatapultAPI\Core\Model\ApiTokensApiTokenPatchBody::class => false];
        }
    }
}
