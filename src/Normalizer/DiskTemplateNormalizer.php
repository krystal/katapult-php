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
    class DiskTemplateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplate';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplate';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\DiskTemplate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('permalink', $data)) {
                $object->setPermalink($data['permalink']);
                unset($data['permalink']);
            }
            if (\array_key_exists('universal', $data)) {
                $object->setUniversal($data['universal']);
                unset($data['universal']);
            }
            if (\array_key_exists('latest_version', $data) && $data['latest_version'] !== null) {
                $object->setLatestVersion($this->denormalizer->denormalize($data['latest_version'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplateLatestVersion', 'json', $context));
                unset($data['latest_version']);
            } elseif (\array_key_exists('latest_version', $data) && $data['latest_version'] === null) {
                $object->setLatestVersion(null);
            }
            if (\array_key_exists('operating_system', $data) && $data['operating_system'] !== null) {
                $object->setOperatingSystem($this->denormalizer->denormalize($data['operating_system'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplateOperatingSystem', 'json', $context));
                unset($data['operating_system']);
            } elseif (\array_key_exists('operating_system', $data) && $data['operating_system'] === null) {
                $object->setOperatingSystem(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('permalink') && null !== $object->getPermalink()) {
                $data['permalink'] = $object->getPermalink();
            }
            if ($object->isInitialized('universal') && null !== $object->getUniversal()) {
                $data['universal'] = $object->getUniversal();
            }
            if ($object->isInitialized('latestVersion') && null !== $object->getLatestVersion()) {
                $data['latest_version'] = $this->normalizer->normalize($object->getLatestVersion(), 'json', $context);
            }
            if ($object->isInitialized('operatingSystem') && null !== $object->getOperatingSystem()) {
                $data['operating_system'] = $this->normalizer->normalize($object->getOperatingSystem(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplate' => false];
        }
    }
} else {
    class DiskTemplateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplate';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplate';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\DiskTemplate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('permalink', $data)) {
                $object->setPermalink($data['permalink']);
                unset($data['permalink']);
            }
            if (\array_key_exists('universal', $data)) {
                $object->setUniversal($data['universal']);
                unset($data['universal']);
            }
            if (\array_key_exists('latest_version', $data) && $data['latest_version'] !== null) {
                $object->setLatestVersion($this->denormalizer->denormalize($data['latest_version'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplateLatestVersion', 'json', $context));
                unset($data['latest_version']);
            } elseif (\array_key_exists('latest_version', $data) && $data['latest_version'] === null) {
                $object->setLatestVersion(null);
            }
            if (\array_key_exists('operating_system', $data) && $data['operating_system'] !== null) {
                $object->setOperatingSystem($this->denormalizer->denormalize($data['operating_system'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplateOperatingSystem', 'json', $context));
                unset($data['operating_system']);
            } elseif (\array_key_exists('operating_system', $data) && $data['operating_system'] === null) {
                $object->setOperatingSystem(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('permalink') && null !== $object->getPermalink()) {
                $data['permalink'] = $object->getPermalink();
            }
            if ($object->isInitialized('universal') && null !== $object->getUniversal()) {
                $data['universal'] = $object->getUniversal();
            }
            if ($object->isInitialized('latestVersion') && null !== $object->getLatestVersion()) {
                $data['latest_version'] = $this->normalizer->normalize($object->getLatestVersion(), 'json', $context);
            }
            if ($object->isInitialized('operatingSystem') && null !== $object->getOperatingSystem()) {
                $data['operating_system'] = $this->normalizer->normalize($object->getOperatingSystem(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplate' => false];
        }
    }
}
