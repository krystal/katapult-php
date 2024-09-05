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
    class VirtualMachineBuildDiskArgumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\VirtualMachineBuildDiskArguments::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\VirtualMachineBuildDiskArguments::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\VirtualMachineBuildDiskArguments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('size_in_gb', $data)) {
                $object->setSizeInGb($data['size_in_gb']);
                unset($data['size_in_gb']);
            }
            if (\array_key_exists('initial_file_system', $data)) {
                $object->setInitialFileSystem($data['initial_file_system']);
                unset($data['initial_file_system']);
            }
            if (\array_key_exists('system', $data)) {
                $object->setSystem($data['system']);
                unset($data['system']);
            }
            if (\array_key_exists('io_profile', $data)) {
                $object->setIoProfile($this->denormalizer->denormalize($data['io_profile'], \KatapultAPI\Core\Model\DiskIOProfileLookup::class, 'json', $context));
                unset($data['io_profile']);
            }
            if (\array_key_exists('storage_speed', $data)) {
                $object->setStorageSpeed($data['storage_speed']);
                unset($data['storage_speed']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $data['size_in_gb'] = $object->getSizeInGb();
            if ($object->isInitialized('initialFileSystem') && null !== $object->getInitialFileSystem()) {
                $data['initial_file_system'] = $object->getInitialFileSystem();
            }
            if ($object->isInitialized('system') && null !== $object->getSystem()) {
                $data['system'] = $object->getSystem();
            }
            if ($object->isInitialized('ioProfile') && null !== $object->getIoProfile()) {
                $data['io_profile'] = $this->normalizer->normalize($object->getIoProfile(), 'json', $context);
            }
            if ($object->isInitialized('storageSpeed') && null !== $object->getStorageSpeed()) {
                $data['storage_speed'] = $object->getStorageSpeed();
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
            return [\KatapultAPI\Core\Model\VirtualMachineBuildDiskArguments::class => false];
        }
    }
} else {
    class VirtualMachineBuildDiskArgumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\VirtualMachineBuildDiskArguments::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\VirtualMachineBuildDiskArguments::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\VirtualMachineBuildDiskArguments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('size_in_gb', $data)) {
                $object->setSizeInGb($data['size_in_gb']);
                unset($data['size_in_gb']);
            }
            if (\array_key_exists('initial_file_system', $data)) {
                $object->setInitialFileSystem($data['initial_file_system']);
                unset($data['initial_file_system']);
            }
            if (\array_key_exists('system', $data)) {
                $object->setSystem($data['system']);
                unset($data['system']);
            }
            if (\array_key_exists('io_profile', $data)) {
                $object->setIoProfile($this->denormalizer->denormalize($data['io_profile'], \KatapultAPI\Core\Model\DiskIOProfileLookup::class, 'json', $context));
                unset($data['io_profile']);
            }
            if (\array_key_exists('storage_speed', $data)) {
                $object->setStorageSpeed($data['storage_speed']);
                unset($data['storage_speed']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $data['size_in_gb'] = $object->getSizeInGb();
            if ($object->isInitialized('initialFileSystem') && null !== $object->getInitialFileSystem()) {
                $data['initial_file_system'] = $object->getInitialFileSystem();
            }
            if ($object->isInitialized('system') && null !== $object->getSystem()) {
                $data['system'] = $object->getSystem();
            }
            if ($object->isInitialized('ioProfile') && null !== $object->getIoProfile()) {
                $data['io_profile'] = $this->normalizer->normalize($object->getIoProfile(), 'json', $context);
            }
            if ($object->isInitialized('storageSpeed') && null !== $object->getStorageSpeed()) {
                $data['storage_speed'] = $object->getStorageSpeed();
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
            return [\KatapultAPI\Core\Model\VirtualMachineBuildDiskArguments::class => false];
        }
    }
}
