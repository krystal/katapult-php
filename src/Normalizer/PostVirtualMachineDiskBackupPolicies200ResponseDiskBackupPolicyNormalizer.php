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
    class PostVirtualMachineDiskBackupPolicies200ResponseDiskBackupPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\PostVirtualMachineDiskBackupPolicies200ResponseDiskBackupPolicy';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\PostVirtualMachineDiskBackupPolicies200ResponseDiskBackupPolicy';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\PostVirtualMachineDiskBackupPolicies200ResponseDiskBackupPolicy();
            if (\array_key_exists('total_size', $data) && \is_int($data['total_size'])) {
                $data['total_size'] = (float) $data['total_size'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('retention', $data)) {
                $object->setRetention($data['retention']);
                unset($data['retention']);
            }
            if (\array_key_exists('total_size', $data)) {
                $object->setTotalSize($data['total_size']);
                unset($data['total_size']);
            }
            if (\array_key_exists('target', $data)) {
                $object->setTarget($this->denormalizer->denormalize($data['target'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskBackupPolicyTarget', 'json', $context));
                unset($data['target']);
            }
            if (\array_key_exists('schedule', $data)) {
                $object->setSchedule($this->denormalizer->denormalize($data['schedule'], 'Krystal\\Katapult\\KatapultAPI\\Model\\Schedule', 'json', $context));
                unset($data['schedule']);
            }
            if (\array_key_exists('auto_move_to_trash_at', $data) && $data['auto_move_to_trash_at'] !== null) {
                $object->setAutoMoveToTrashAt($data['auto_move_to_trash_at']);
                unset($data['auto_move_to_trash_at']);
            } elseif (\array_key_exists('auto_move_to_trash_at', $data) && $data['auto_move_to_trash_at'] === null) {
                $object->setAutoMoveToTrashAt(null);
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
            if ($object->isInitialized('retention') && null !== $object->getRetention()) {
                $data['retention'] = $object->getRetention();
            }
            if ($object->isInitialized('totalSize') && null !== $object->getTotalSize()) {
                $data['total_size'] = $object->getTotalSize();
            }
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['target'] = $this->normalizer->normalize($object->getTarget(), 'json', $context);
            }
            if ($object->isInitialized('schedule') && null !== $object->getSchedule()) {
                $data['schedule'] = $this->normalizer->normalize($object->getSchedule(), 'json', $context);
            }
            if ($object->isInitialized('autoMoveToTrashAt') && null !== $object->getAutoMoveToTrashAt()) {
                $data['auto_move_to_trash_at'] = $object->getAutoMoveToTrashAt();
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\PostVirtualMachineDiskBackupPolicies200ResponseDiskBackupPolicy' => false];
        }
    }
} else {
    class PostVirtualMachineDiskBackupPolicies200ResponseDiskBackupPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\PostVirtualMachineDiskBackupPolicies200ResponseDiskBackupPolicy';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\PostVirtualMachineDiskBackupPolicies200ResponseDiskBackupPolicy';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\PostVirtualMachineDiskBackupPolicies200ResponseDiskBackupPolicy();
            if (\array_key_exists('total_size', $data) && \is_int($data['total_size'])) {
                $data['total_size'] = (float) $data['total_size'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('retention', $data)) {
                $object->setRetention($data['retention']);
                unset($data['retention']);
            }
            if (\array_key_exists('total_size', $data)) {
                $object->setTotalSize($data['total_size']);
                unset($data['total_size']);
            }
            if (\array_key_exists('target', $data)) {
                $object->setTarget($this->denormalizer->denormalize($data['target'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskBackupPolicyTarget', 'json', $context));
                unset($data['target']);
            }
            if (\array_key_exists('schedule', $data)) {
                $object->setSchedule($this->denormalizer->denormalize($data['schedule'], 'Krystal\\Katapult\\KatapultAPI\\Model\\Schedule', 'json', $context));
                unset($data['schedule']);
            }
            if (\array_key_exists('auto_move_to_trash_at', $data) && $data['auto_move_to_trash_at'] !== null) {
                $object->setAutoMoveToTrashAt($data['auto_move_to_trash_at']);
                unset($data['auto_move_to_trash_at']);
            } elseif (\array_key_exists('auto_move_to_trash_at', $data) && $data['auto_move_to_trash_at'] === null) {
                $object->setAutoMoveToTrashAt(null);
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
            if ($object->isInitialized('retention') && null !== $object->getRetention()) {
                $data['retention'] = $object->getRetention();
            }
            if ($object->isInitialized('totalSize') && null !== $object->getTotalSize()) {
                $data['total_size'] = $object->getTotalSize();
            }
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['target'] = $this->normalizer->normalize($object->getTarget(), 'json', $context);
            }
            if ($object->isInitialized('schedule') && null !== $object->getSchedule()) {
                $data['schedule'] = $this->normalizer->normalize($object->getSchedule(), 'json', $context);
            }
            if ($object->isInitialized('autoMoveToTrashAt') && null !== $object->getAutoMoveToTrashAt()) {
                $data['auto_move_to_trash_at'] = $object->getAutoMoveToTrashAt();
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\PostVirtualMachineDiskBackupPolicies200ResponseDiskBackupPolicy' => false];
        }
    }
}
