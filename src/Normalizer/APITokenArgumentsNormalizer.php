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
    class APITokenArgumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\APITokenArguments';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\APITokenArguments';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\APITokenArguments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('authorized_ip_addresses', $data)) {
                $values = [];
                foreach ($data['authorized_ip_addresses'] as $value) {
                    $values[] = $value;
                }
                $object->setAuthorizedIpAddresses($values);
                unset($data['authorized_ip_addresses']);
            }
            if (\array_key_exists('expires_at', $data)) {
                $object->setExpiresAt($data['expires_at']);
                unset($data['expires_at']);
            }
            if (\array_key_exists('scopes', $data)) {
                $values_1 = [];
                foreach ($data['scopes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setScopes($values_1);
                unset($data['scopes']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('authorizedIpAddresses') && null !== $object->getAuthorizedIpAddresses()) {
                $values = [];
                foreach ($object->getAuthorizedIpAddresses() as $value) {
                    $values[] = $value;
                }
                $data['authorized_ip_addresses'] = $values;
            }
            if ($object->isInitialized('expiresAt') && null !== $object->getExpiresAt()) {
                $data['expires_at'] = $object->getExpiresAt();
            }
            if ($object->isInitialized('scopes') && null !== $object->getScopes()) {
                $values_1 = [];
                foreach ($object->getScopes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['scopes'] = $values_1;
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\APITokenArguments' => false];
        }
    }
} else {
    class APITokenArgumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\APITokenArguments';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\APITokenArguments';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\APITokenArguments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('authorized_ip_addresses', $data)) {
                $values = [];
                foreach ($data['authorized_ip_addresses'] as $value) {
                    $values[] = $value;
                }
                $object->setAuthorizedIpAddresses($values);
                unset($data['authorized_ip_addresses']);
            }
            if (\array_key_exists('expires_at', $data)) {
                $object->setExpiresAt($data['expires_at']);
                unset($data['expires_at']);
            }
            if (\array_key_exists('scopes', $data)) {
                $values_1 = [];
                foreach ($data['scopes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setScopes($values_1);
                unset($data['scopes']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('authorizedIpAddresses') && null !== $object->getAuthorizedIpAddresses()) {
                $values = [];
                foreach ($object->getAuthorizedIpAddresses() as $value) {
                    $values[] = $value;
                }
                $data['authorized_ip_addresses'] = $values;
            }
            if ($object->isInitialized('expiresAt') && null !== $object->getExpiresAt()) {
                $data['expires_at'] = $object->getExpiresAt();
            }
            if ($object->isInitialized('scopes') && null !== $object->getScopes()) {
                $values_1 = [];
                foreach ($object->getScopes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['scopes'] = $values_1;
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\APITokenArguments' => false];
        }
    }
}
