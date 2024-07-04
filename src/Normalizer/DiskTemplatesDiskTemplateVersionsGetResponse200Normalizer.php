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
    class DiskTemplatesDiskTemplateVersionsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplatesDiskTemplateVersionsGetResponse200';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplatesDiskTemplateVersionsGetResponse200';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\DiskTemplatesDiskTemplateVersionsGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('disk_template', $data)) {
                $object->setDiskTemplate($this->denormalizer->denormalize($data['disk_template'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetDiskTemplateVersions200ResponseDiskTemplate', 'json', $context));
                unset($data['disk_template']);
            }
            if (\array_key_exists('pagination', $data)) {
                $object->setPagination($this->denormalizer->denormalize($data['pagination'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PaginationObject', 'json', $context));
                unset($data['pagination']);
            }
            if (\array_key_exists('disk_template_versions', $data)) {
                $values = [];
                foreach ($data['disk_template_versions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Krystal\\Katapult\\KatapultAPI\\Model\\GetDiskTemplateVersions200ResponseDiskTemplateVersions', 'json', $context);
                }
                $object->setDiskTemplateVersions($values);
                unset($data['disk_template_versions']);
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
            $data['disk_template'] = $this->normalizer->normalize($object->getDiskTemplate(), 'json', $context);
            $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
            $values = [];
            foreach ($object->getDiskTemplateVersions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['disk_template_versions'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplatesDiskTemplateVersionsGetResponse200' => false];
        }
    }
} else {
    class DiskTemplatesDiskTemplateVersionsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplatesDiskTemplateVersionsGetResponse200';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplatesDiskTemplateVersionsGetResponse200';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\DiskTemplatesDiskTemplateVersionsGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('disk_template', $data)) {
                $object->setDiskTemplate($this->denormalizer->denormalize($data['disk_template'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetDiskTemplateVersions200ResponseDiskTemplate', 'json', $context));
                unset($data['disk_template']);
            }
            if (\array_key_exists('pagination', $data)) {
                $object->setPagination($this->denormalizer->denormalize($data['pagination'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PaginationObject', 'json', $context));
                unset($data['pagination']);
            }
            if (\array_key_exists('disk_template_versions', $data)) {
                $values = [];
                foreach ($data['disk_template_versions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Krystal\\Katapult\\KatapultAPI\\Model\\GetDiskTemplateVersions200ResponseDiskTemplateVersions', 'json', $context);
                }
                $object->setDiskTemplateVersions($values);
                unset($data['disk_template_versions']);
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
            $data['disk_template'] = $this->normalizer->normalize($object->getDiskTemplate(), 'json', $context);
            $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
            $values = [];
            foreach ($object->getDiskTemplateVersions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['disk_template_versions'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\DiskTemplatesDiskTemplateVersionsGetResponse200' => false];
        }
    }
}
