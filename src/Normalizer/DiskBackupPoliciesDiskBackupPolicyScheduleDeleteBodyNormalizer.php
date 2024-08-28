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
    class DiskBackupPoliciesDiskBackupPolicyScheduleDeleteBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskBackupPoliciesDiskBackupPolicyScheduleDeleteBody';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskBackupPoliciesDiskBackupPolicyScheduleDeleteBody';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\DiskBackupPoliciesDiskBackupPolicyScheduleDeleteBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('disk_backup_policy', $data)) {
                $object->setDiskBackupPolicy($this->denormalizer->denormalize($data['disk_backup_policy'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskBackupPolicyLookup', 'json', $context));
                unset($data['disk_backup_policy']);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp($data['timestamp']);
                unset($data['timestamp']);
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
            $data['disk_backup_policy'] = $this->normalizer->normalize($object->getDiskBackupPolicy(), 'json', $context);
            $data['timestamp'] = $object->getTimestamp();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\DiskBackupPoliciesDiskBackupPolicyScheduleDeleteBody' => false];
        }
    }
} else {
    class DiskBackupPoliciesDiskBackupPolicyScheduleDeleteBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskBackupPoliciesDiskBackupPolicyScheduleDeleteBody';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskBackupPoliciesDiskBackupPolicyScheduleDeleteBody';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\DiskBackupPoliciesDiskBackupPolicyScheduleDeleteBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('disk_backup_policy', $data)) {
                $object->setDiskBackupPolicy($this->denormalizer->denormalize($data['disk_backup_policy'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskBackupPolicyLookup', 'json', $context));
                unset($data['disk_backup_policy']);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp($data['timestamp']);
                unset($data['timestamp']);
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
            $data['disk_backup_policy'] = $this->normalizer->normalize($object->getDiskBackupPolicy(), 'json', $context);
            $data['timestamp'] = $object->getTimestamp();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\DiskBackupPoliciesDiskBackupPolicyScheduleDeleteBody' => false];
        }
    }
}
