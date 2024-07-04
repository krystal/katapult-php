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
    class DNSRecordContentAttributesSSHFPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentAttributesSSHFP';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentAttributesSSHFP';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\DNSRecordContentAttributesSSHFP();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('algorithm', $data) && $data['algorithm'] !== null) {
                $object->setAlgorithm($data['algorithm']);
                unset($data['algorithm']);
            } elseif (\array_key_exists('algorithm', $data) && $data['algorithm'] === null) {
                $object->setAlgorithm(null);
            }
            if (\array_key_exists('fingerprint_type', $data) && $data['fingerprint_type'] !== null) {
                $object->setFingerprintType($data['fingerprint_type']);
                unset($data['fingerprint_type']);
            } elseif (\array_key_exists('fingerprint_type', $data) && $data['fingerprint_type'] === null) {
                $object->setFingerprintType(null);
            }
            if (\array_key_exists('fingerprint', $data) && $data['fingerprint'] !== null) {
                $object->setFingerprint($data['fingerprint']);
                unset($data['fingerprint']);
            } elseif (\array_key_exists('fingerprint', $data) && $data['fingerprint'] === null) {
                $object->setFingerprint(null);
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
            if ($object->isInitialized('algorithm') && null !== $object->getAlgorithm()) {
                $data['algorithm'] = $object->getAlgorithm();
            }
            if ($object->isInitialized('fingerprintType') && null !== $object->getFingerprintType()) {
                $data['fingerprint_type'] = $object->getFingerprintType();
            }
            if ($object->isInitialized('fingerprint') && null !== $object->getFingerprint()) {
                $data['fingerprint'] = $object->getFingerprint();
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentAttributesSSHFP' => false];
        }
    }
} else {
    class DNSRecordContentAttributesSSHFPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentAttributesSSHFP';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentAttributesSSHFP';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\DNSRecordContentAttributesSSHFP();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('algorithm', $data) && $data['algorithm'] !== null) {
                $object->setAlgorithm($data['algorithm']);
                unset($data['algorithm']);
            } elseif (\array_key_exists('algorithm', $data) && $data['algorithm'] === null) {
                $object->setAlgorithm(null);
            }
            if (\array_key_exists('fingerprint_type', $data) && $data['fingerprint_type'] !== null) {
                $object->setFingerprintType($data['fingerprint_type']);
                unset($data['fingerprint_type']);
            } elseif (\array_key_exists('fingerprint_type', $data) && $data['fingerprint_type'] === null) {
                $object->setFingerprintType(null);
            }
            if (\array_key_exists('fingerprint', $data) && $data['fingerprint'] !== null) {
                $object->setFingerprint($data['fingerprint']);
                unset($data['fingerprint']);
            } elseif (\array_key_exists('fingerprint', $data) && $data['fingerprint'] === null) {
                $object->setFingerprint(null);
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
            if ($object->isInitialized('algorithm') && null !== $object->getAlgorithm()) {
                $data['algorithm'] = $object->getAlgorithm();
            }
            if ($object->isInitialized('fingerprintType') && null !== $object->getFingerprintType()) {
                $data['fingerprint_type'] = $object->getFingerprintType();
            }
            if ($object->isInitialized('fingerprint') && null !== $object->getFingerprint()) {
                $data['fingerprint'] = $object->getFingerprint();
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentAttributesSSHFP' => false];
        }
    }
}
