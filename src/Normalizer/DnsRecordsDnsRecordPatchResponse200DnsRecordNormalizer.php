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
    class DnsRecordsDnsRecordPatchResponse200DnsRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DnsRecordsDnsRecordPatchResponse200DnsRecord';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DnsRecordsDnsRecordPatchResponse200DnsRecord';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\DnsRecordsDnsRecordPatchResponse200DnsRecord();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('full_name', $data)) {
                $object->setFullName($data['full_name']);
                unset($data['full_name']);
            }
            if (\array_key_exists('ttl', $data) && $data['ttl'] !== null) {
                $object->setTtl($data['ttl']);
                unset($data['ttl']);
            } elseif (\array_key_exists('ttl', $data) && $data['ttl'] === null) {
                $object->setTtl(null);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('priority', $data) && $data['priority'] !== null) {
                $object->setPriority($data['priority']);
                unset($data['priority']);
            } elseif (\array_key_exists('priority', $data) && $data['priority'] === null) {
                $object->setPriority(null);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
                unset($data['content']);
            }
            if (\array_key_exists('content_attributes', $data)) {
                $object->setContentAttributes($this->denormalizer->denormalize($data['content_attributes'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentAttributes', 'json', $context));
                unset($data['content_attributes']);
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
            if ($object->isInitialized('fullName') && null !== $object->getFullName()) {
                $data['full_name'] = $object->getFullName();
            }
            if ($object->isInitialized('ttl') && null !== $object->getTtl()) {
                $data['ttl'] = $object->getTtl();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('priority') && null !== $object->getPriority()) {
                $data['priority'] = $object->getPriority();
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $object->getContent();
            }
            if ($object->isInitialized('contentAttributes') && null !== $object->getContentAttributes()) {
                $data['content_attributes'] = $this->normalizer->normalize($object->getContentAttributes(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\DnsRecordsDnsRecordPatchResponse200DnsRecord' => false];
        }
    }
} else {
    class DnsRecordsDnsRecordPatchResponse200DnsRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DnsRecordsDnsRecordPatchResponse200DnsRecord';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DnsRecordsDnsRecordPatchResponse200DnsRecord';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\DnsRecordsDnsRecordPatchResponse200DnsRecord();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('full_name', $data)) {
                $object->setFullName($data['full_name']);
                unset($data['full_name']);
            }
            if (\array_key_exists('ttl', $data) && $data['ttl'] !== null) {
                $object->setTtl($data['ttl']);
                unset($data['ttl']);
            } elseif (\array_key_exists('ttl', $data) && $data['ttl'] === null) {
                $object->setTtl(null);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('priority', $data) && $data['priority'] !== null) {
                $object->setPriority($data['priority']);
                unset($data['priority']);
            } elseif (\array_key_exists('priority', $data) && $data['priority'] === null) {
                $object->setPriority(null);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
                unset($data['content']);
            }
            if (\array_key_exists('content_attributes', $data)) {
                $object->setContentAttributes($this->denormalizer->denormalize($data['content_attributes'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentAttributes', 'json', $context));
                unset($data['content_attributes']);
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
            if ($object->isInitialized('fullName') && null !== $object->getFullName()) {
                $data['full_name'] = $object->getFullName();
            }
            if ($object->isInitialized('ttl') && null !== $object->getTtl()) {
                $data['ttl'] = $object->getTtl();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('priority') && null !== $object->getPriority()) {
                $data['priority'] = $object->getPriority();
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $object->getContent();
            }
            if ($object->isInitialized('contentAttributes') && null !== $object->getContentAttributes()) {
                $data['content_attributes'] = $this->normalizer->normalize($object->getContentAttributes(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\DnsRecordsDnsRecordPatchResponse200DnsRecord' => false];
        }
    }
}
