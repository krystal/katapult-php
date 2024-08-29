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
    class PolicyFeaturesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'KatapultAPI\\Core\\Model\\PolicyFeatures';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'KatapultAPI\\Core\\Model\\PolicyFeatures';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\PolicyFeatures();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('disk_bus_configuration', $data)) {
                $object->setDiskBusConfiguration($this->denormalizer->denormalize($data['disk_bus_configuration'], 'KatapultAPI\\Core\\Model\\PolicyFeature', 'json', $context));
                unset($data['disk_bus_configuration']);
            }
            if (\array_key_exists('zone_selection', $data)) {
                $object->setZoneSelection($this->denormalizer->denormalize($data['zone_selection'], 'KatapultAPI\\Core\\Model\\PolicyFeature', 'json', $context));
                unset($data['zone_selection']);
            }
            if (\array_key_exists('restricted_traffic_types', $data)) {
                $object->setRestrictedTrafficTypes($this->denormalizer->denormalize($data['restricted_traffic_types'], 'KatapultAPI\\Core\\Model\\PolicyFeature', 'json', $context));
                unset($data['restricted_traffic_types']);
            }
            if (\array_key_exists('suspension', $data)) {
                $object->setSuspension($this->denormalizer->denormalize($data['suspension'], 'KatapultAPI\\Core\\Model\\PolicyFeature', 'json', $context));
                unset($data['suspension']);
            }
            if (\array_key_exists('flexible_virtual_machine_resources', $data)) {
                $object->setFlexibleVirtualMachineResources($this->denormalizer->denormalize($data['flexible_virtual_machine_resources'], 'KatapultAPI\\Core\\Model\\PolicyFeature', 'json', $context));
                unset($data['flexible_virtual_machine_resources']);
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
            if ($object->isInitialized('diskBusConfiguration') && null !== $object->getDiskBusConfiguration()) {
                $data['disk_bus_configuration'] = $this->normalizer->normalize($object->getDiskBusConfiguration(), 'json', $context);
            }
            if ($object->isInitialized('zoneSelection') && null !== $object->getZoneSelection()) {
                $data['zone_selection'] = $this->normalizer->normalize($object->getZoneSelection(), 'json', $context);
            }
            if ($object->isInitialized('restrictedTrafficTypes') && null !== $object->getRestrictedTrafficTypes()) {
                $data['restricted_traffic_types'] = $this->normalizer->normalize($object->getRestrictedTrafficTypes(), 'json', $context);
            }
            if ($object->isInitialized('suspension') && null !== $object->getSuspension()) {
                $data['suspension'] = $this->normalizer->normalize($object->getSuspension(), 'json', $context);
            }
            if ($object->isInitialized('flexibleVirtualMachineResources') && null !== $object->getFlexibleVirtualMachineResources()) {
                $data['flexible_virtual_machine_resources'] = $this->normalizer->normalize($object->getFlexibleVirtualMachineResources(), 'json', $context);
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
            return ['KatapultAPI\\Core\\Model\\PolicyFeatures' => false];
        }
    }
} else {
    class PolicyFeaturesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'KatapultAPI\\Core\\Model\\PolicyFeatures';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'KatapultAPI\\Core\\Model\\PolicyFeatures';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\PolicyFeatures();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('disk_bus_configuration', $data)) {
                $object->setDiskBusConfiguration($this->denormalizer->denormalize($data['disk_bus_configuration'], 'KatapultAPI\\Core\\Model\\PolicyFeature', 'json', $context));
                unset($data['disk_bus_configuration']);
            }
            if (\array_key_exists('zone_selection', $data)) {
                $object->setZoneSelection($this->denormalizer->denormalize($data['zone_selection'], 'KatapultAPI\\Core\\Model\\PolicyFeature', 'json', $context));
                unset($data['zone_selection']);
            }
            if (\array_key_exists('restricted_traffic_types', $data)) {
                $object->setRestrictedTrafficTypes($this->denormalizer->denormalize($data['restricted_traffic_types'], 'KatapultAPI\\Core\\Model\\PolicyFeature', 'json', $context));
                unset($data['restricted_traffic_types']);
            }
            if (\array_key_exists('suspension', $data)) {
                $object->setSuspension($this->denormalizer->denormalize($data['suspension'], 'KatapultAPI\\Core\\Model\\PolicyFeature', 'json', $context));
                unset($data['suspension']);
            }
            if (\array_key_exists('flexible_virtual_machine_resources', $data)) {
                $object->setFlexibleVirtualMachineResources($this->denormalizer->denormalize($data['flexible_virtual_machine_resources'], 'KatapultAPI\\Core\\Model\\PolicyFeature', 'json', $context));
                unset($data['flexible_virtual_machine_resources']);
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
            if ($object->isInitialized('diskBusConfiguration') && null !== $object->getDiskBusConfiguration()) {
                $data['disk_bus_configuration'] = $this->normalizer->normalize($object->getDiskBusConfiguration(), 'json', $context);
            }
            if ($object->isInitialized('zoneSelection') && null !== $object->getZoneSelection()) {
                $data['zone_selection'] = $this->normalizer->normalize($object->getZoneSelection(), 'json', $context);
            }
            if ($object->isInitialized('restrictedTrafficTypes') && null !== $object->getRestrictedTrafficTypes()) {
                $data['restricted_traffic_types'] = $this->normalizer->normalize($object->getRestrictedTrafficTypes(), 'json', $context);
            }
            if ($object->isInitialized('suspension') && null !== $object->getSuspension()) {
                $data['suspension'] = $this->normalizer->normalize($object->getSuspension(), 'json', $context);
            }
            if ($object->isInitialized('flexibleVirtualMachineResources') && null !== $object->getFlexibleVirtualMachineResources()) {
                $data['flexible_virtual_machine_resources'] = $this->normalizer->normalize($object->getFlexibleVirtualMachineResources(), 'json', $context);
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
            return ['KatapultAPI\\Core\\Model\\PolicyFeatures' => false];
        }
    }
}
