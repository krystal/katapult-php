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
    class VirtualMachineArgumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineArguments';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineArguments';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\VirtualMachineArguments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('hostname', $data)) {
                $object->setHostname($data['hostname']);
                unset($data['hostname']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('tag_names', $data)) {
                $values = [];
                foreach ($data['tag_names'] as $value) {
                    $values[] = $value;
                }
                $object->setTagNames($values);
                unset($data['tag_names']);
            }
            if (\array_key_exists('gpu_type', $data)) {
                $object->setGpuType($this->denormalizer->denormalize($data['gpu_type'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GPUTypeLookup', 'json', $context));
                unset($data['gpu_type']);
            }
            if (\array_key_exists('group', $data)) {
                $object->setGroup($this->denormalizer->denormalize($data['group'], 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineGroupLookup', 'json', $context));
                unset($data['group']);
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
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('tagNames') && null !== $object->getTagNames()) {
                $values = [];
                foreach ($object->getTagNames() as $value) {
                    $values[] = $value;
                }
                $data['tag_names'] = $values;
            }
            if ($object->isInitialized('gpuType') && null !== $object->getGpuType()) {
                $data['gpu_type'] = $this->normalizer->normalize($object->getGpuType(), 'json', $context);
            }
            if ($object->isInitialized('group') && null !== $object->getGroup()) {
                $data['group'] = $this->normalizer->normalize($object->getGroup(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineArguments' => false];
        }
    }
} else {
    class VirtualMachineArgumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineArguments';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineArguments';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\VirtualMachineArguments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('hostname', $data)) {
                $object->setHostname($data['hostname']);
                unset($data['hostname']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('tag_names', $data)) {
                $values = [];
                foreach ($data['tag_names'] as $value) {
                    $values[] = $value;
                }
                $object->setTagNames($values);
                unset($data['tag_names']);
            }
            if (\array_key_exists('gpu_type', $data)) {
                $object->setGpuType($this->denormalizer->denormalize($data['gpu_type'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GPUTypeLookup', 'json', $context));
                unset($data['gpu_type']);
            }
            if (\array_key_exists('group', $data)) {
                $object->setGroup($this->denormalizer->denormalize($data['group'], 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineGroupLookup', 'json', $context));
                unset($data['group']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('tagNames') && null !== $object->getTagNames()) {
                $values = [];
                foreach ($object->getTagNames() as $value) {
                    $values[] = $value;
                }
                $data['tag_names'] = $values;
            }
            if ($object->isInitialized('gpuType') && null !== $object->getGpuType()) {
                $data['gpu_type'] = $this->normalizer->normalize($object->getGpuType(), 'json', $context);
            }
            if ($object->isInitialized('group') && null !== $object->getGroup()) {
                $data['group'] = $this->normalizer->normalize($object->getGroup(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineArguments' => false];
        }
    }
}
