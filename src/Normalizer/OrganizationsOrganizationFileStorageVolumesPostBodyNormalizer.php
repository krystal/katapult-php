<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Krystal\Katapult\KatapultAPI\Runtime\Normalizer\CheckArray;
use Krystal\Katapult\KatapultAPI\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class OrganizationsOrganizationFileStorageVolumesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationFileStorageVolumesPostBody';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationFileStorageVolumesPostBody';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\OrganizationsOrganizationFileStorageVolumesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('organization', $data)) {
                $object->setOrganization($this->denormalizer->denormalize($data['organization'], 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationLookup', 'json', $context));
                unset($data['organization']);
            }
            if (\array_key_exists('properties', $data)) {
                $object->setProperties($this->denormalizer->denormalize($data['properties'], 'Krystal\\Katapult\\KatapultAPI\\Model\\FileStorageVolumeArguments', 'json', $context));
                unset($data['properties']);
            }
            if (\array_key_exists('annotations', $data)) {
                $values = [];
                foreach ($data['annotations'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Krystal\\Katapult\\KatapultAPI\\Model\\KeyValue', 'json', $context);
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
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationFileStorageVolumesPostBody' => false];
        }
    }
} else {
    class OrganizationsOrganizationFileStorageVolumesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationFileStorageVolumesPostBody';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationFileStorageVolumesPostBody';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\OrganizationsOrganizationFileStorageVolumesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('organization', $data)) {
                $object->setOrganization($this->denormalizer->denormalize($data['organization'], 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationLookup', 'json', $context));
                unset($data['organization']);
            }
            if (\array_key_exists('properties', $data)) {
                $object->setProperties($this->denormalizer->denormalize($data['properties'], 'Krystal\\Katapult\\KatapultAPI\\Model\\FileStorageVolumeArguments', 'json', $context));
                unset($data['properties']);
            }
            if (\array_key_exists('annotations', $data)) {
                $values = [];
                foreach ($data['annotations'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Krystal\\Katapult\\KatapultAPI\\Model\\KeyValue', 'json', $context);
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
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationFileStorageVolumesPostBody' => false];
        }
    }
}
