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
    class PostDiskAssign200ResponseDiskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDisk';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDisk';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\PostDiskAssign200ResponseDisk();
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
            if (\array_key_exists('size_in_gb', $data)) {
                $object->setSizeInGb($data['size_in_gb']);
                unset($data['size_in_gb']);
            }
            if (\array_key_exists('wwn', $data)) {
                $object->setWwn($data['wwn']);
                unset($data['wwn']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('storage_speed', $data)) {
                $object->setStorageSpeed($data['storage_speed']);
                unset($data['storage_speed']);
            }
            if (\array_key_exists('io_profile', $data) && $data['io_profile'] !== null) {
                $object->setIoProfile($this->denormalizer->denormalize($data['io_profile'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDiskIoProfile', 'json', $context));
                unset($data['io_profile']);
            } elseif (\array_key_exists('io_profile', $data) && $data['io_profile'] === null) {
                $object->setIoProfile(null);
            }
            if (\array_key_exists('bus_type', $data) && $data['bus_type'] !== null) {
                $object->setBusType($data['bus_type']);
                unset($data['bus_type']);
            } elseif (\array_key_exists('bus_type', $data) && $data['bus_type'] === null) {
                $object->setBusType(null);
            }
            if (\array_key_exists('data_center', $data)) {
                $object->setDataCenter($this->denormalizer->denormalize($data['data_center'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssignPartDataCenter', 'json', $context));
                unset($data['data_center']);
            }
            if (\array_key_exists('virtual_machine_disk', $data) && $data['virtual_machine_disk'] !== null) {
                $object->setVirtualMachineDisk($this->denormalizer->denormalize($data['virtual_machine_disk'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDiskVirtualMachineDisk', 'json', $context));
                unset($data['virtual_machine_disk']);
            } elseif (\array_key_exists('virtual_machine_disk', $data) && $data['virtual_machine_disk'] === null) {
                $object->setVirtualMachineDisk(null);
            }
            if (\array_key_exists('installation', $data) && $data['installation'] !== null) {
                $object->setInstallation($this->denormalizer->denormalize($data['installation'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDiskInstallation', 'json', $context));
                unset($data['installation']);
            } elseif (\array_key_exists('installation', $data) && $data['installation'] === null) {
                $object->setInstallation(null);
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
            if ($object->isInitialized('sizeInGb') && null !== $object->getSizeInGb()) {
                $data['size_in_gb'] = $object->getSizeInGb();
            }
            if ($object->isInitialized('wwn') && null !== $object->getWwn()) {
                $data['wwn'] = $object->getWwn();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('storageSpeed') && null !== $object->getStorageSpeed()) {
                $data['storage_speed'] = $object->getStorageSpeed();
            }
            if ($object->isInitialized('ioProfile') && null !== $object->getIoProfile()) {
                $data['io_profile'] = $this->normalizer->normalize($object->getIoProfile(), 'json', $context);
            }
            if ($object->isInitialized('busType') && null !== $object->getBusType()) {
                $data['bus_type'] = $object->getBusType();
            }
            if ($object->isInitialized('dataCenter') && null !== $object->getDataCenter()) {
                $data['data_center'] = $this->normalizer->normalize($object->getDataCenter(), 'json', $context);
            }
            if ($object->isInitialized('virtualMachineDisk') && null !== $object->getVirtualMachineDisk()) {
                $data['virtual_machine_disk'] = $this->normalizer->normalize($object->getVirtualMachineDisk(), 'json', $context);
            }
            if ($object->isInitialized('installation') && null !== $object->getInstallation()) {
                $data['installation'] = $this->normalizer->normalize($object->getInstallation(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDisk' => false];
        }
    }
} else {
    class PostDiskAssign200ResponseDiskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDisk';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDisk';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\PostDiskAssign200ResponseDisk();
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
            if (\array_key_exists('size_in_gb', $data)) {
                $object->setSizeInGb($data['size_in_gb']);
                unset($data['size_in_gb']);
            }
            if (\array_key_exists('wwn', $data)) {
                $object->setWwn($data['wwn']);
                unset($data['wwn']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('storage_speed', $data)) {
                $object->setStorageSpeed($data['storage_speed']);
                unset($data['storage_speed']);
            }
            if (\array_key_exists('io_profile', $data) && $data['io_profile'] !== null) {
                $object->setIoProfile($this->denormalizer->denormalize($data['io_profile'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDiskIoProfile', 'json', $context));
                unset($data['io_profile']);
            } elseif (\array_key_exists('io_profile', $data) && $data['io_profile'] === null) {
                $object->setIoProfile(null);
            }
            if (\array_key_exists('bus_type', $data) && $data['bus_type'] !== null) {
                $object->setBusType($data['bus_type']);
                unset($data['bus_type']);
            } elseif (\array_key_exists('bus_type', $data) && $data['bus_type'] === null) {
                $object->setBusType(null);
            }
            if (\array_key_exists('data_center', $data)) {
                $object->setDataCenter($this->denormalizer->denormalize($data['data_center'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssignPartDataCenter', 'json', $context));
                unset($data['data_center']);
            }
            if (\array_key_exists('virtual_machine_disk', $data) && $data['virtual_machine_disk'] !== null) {
                $object->setVirtualMachineDisk($this->denormalizer->denormalize($data['virtual_machine_disk'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDiskVirtualMachineDisk', 'json', $context));
                unset($data['virtual_machine_disk']);
            } elseif (\array_key_exists('virtual_machine_disk', $data) && $data['virtual_machine_disk'] === null) {
                $object->setVirtualMachineDisk(null);
            }
            if (\array_key_exists('installation', $data) && $data['installation'] !== null) {
                $object->setInstallation($this->denormalizer->denormalize($data['installation'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDiskInstallation', 'json', $context));
                unset($data['installation']);
            } elseif (\array_key_exists('installation', $data) && $data['installation'] === null) {
                $object->setInstallation(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('sizeInGb') && null !== $object->getSizeInGb()) {
                $data['size_in_gb'] = $object->getSizeInGb();
            }
            if ($object->isInitialized('wwn') && null !== $object->getWwn()) {
                $data['wwn'] = $object->getWwn();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('storageSpeed') && null !== $object->getStorageSpeed()) {
                $data['storage_speed'] = $object->getStorageSpeed();
            }
            if ($object->isInitialized('ioProfile') && null !== $object->getIoProfile()) {
                $data['io_profile'] = $this->normalizer->normalize($object->getIoProfile(), 'json', $context);
            }
            if ($object->isInitialized('busType') && null !== $object->getBusType()) {
                $data['bus_type'] = $object->getBusType();
            }
            if ($object->isInitialized('dataCenter') && null !== $object->getDataCenter()) {
                $data['data_center'] = $this->normalizer->normalize($object->getDataCenter(), 'json', $context);
            }
            if ($object->isInitialized('virtualMachineDisk') && null !== $object->getVirtualMachineDisk()) {
                $data['virtual_machine_disk'] = $this->normalizer->normalize($object->getVirtualMachineDisk(), 'json', $context);
            }
            if ($object->isInitialized('installation') && null !== $object->getInstallation()) {
                $data['installation'] = $this->normalizer->normalize($object->getInstallation(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\PostDiskAssign200ResponseDisk' => false];
        }
    }
}
