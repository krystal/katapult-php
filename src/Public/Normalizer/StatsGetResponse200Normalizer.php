<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use KatapultAPI\Public\Runtime\Normalizer\CheckArray;
use KatapultAPI\Public\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class StatsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Public\Model\StatsGetResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Public\Model\StatsGetResponse200::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Public\Model\StatsGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('total_virtual_machines_launched', $data)) {
                $object->setTotalVirtualMachinesLaunched($data['total_virtual_machines_launched']);
                unset($data['total_virtual_machines_launched']);
            }
            if (\array_key_exists('total_virtual_machines_launched_today', $data)) {
                $object->setTotalVirtualMachinesLaunchedToday($data['total_virtual_machines_launched_today']);
                unset($data['total_virtual_machines_launched_today']);
            }
            if (\array_key_exists('total_memory', $data)) {
                $object->setTotalMemory($data['total_memory']);
                unset($data['total_memory']);
            }
            if (\array_key_exists('total_cpu_cores', $data)) {
                $object->setTotalCpuCores($data['total_cpu_cores']);
                unset($data['total_cpu_cores']);
            }
            if (\array_key_exists('total_block_storage', $data)) {
                $object->setTotalBlockStorage($data['total_block_storage']);
                unset($data['total_block_storage']);
            }
            if (\array_key_exists('total_organizations', $data)) {
                $object->setTotalOrganizations($data['total_organizations']);
                unset($data['total_organizations']);
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
            $data['total_virtual_machines_launched'] = $object->getTotalVirtualMachinesLaunched();
            $data['total_virtual_machines_launched_today'] = $object->getTotalVirtualMachinesLaunchedToday();
            $data['total_memory'] = $object->getTotalMemory();
            $data['total_cpu_cores'] = $object->getTotalCpuCores();
            $data['total_block_storage'] = $object->getTotalBlockStorage();
            $data['total_organizations'] = $object->getTotalOrganizations();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\KatapultAPI\Public\Model\StatsGetResponse200::class => false];
        }
    }
} else {
    class StatsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Public\Model\StatsGetResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Public\Model\StatsGetResponse200::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Public\Model\StatsGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('total_virtual_machines_launched', $data)) {
                $object->setTotalVirtualMachinesLaunched($data['total_virtual_machines_launched']);
                unset($data['total_virtual_machines_launched']);
            }
            if (\array_key_exists('total_virtual_machines_launched_today', $data)) {
                $object->setTotalVirtualMachinesLaunchedToday($data['total_virtual_machines_launched_today']);
                unset($data['total_virtual_machines_launched_today']);
            }
            if (\array_key_exists('total_memory', $data)) {
                $object->setTotalMemory($data['total_memory']);
                unset($data['total_memory']);
            }
            if (\array_key_exists('total_cpu_cores', $data)) {
                $object->setTotalCpuCores($data['total_cpu_cores']);
                unset($data['total_cpu_cores']);
            }
            if (\array_key_exists('total_block_storage', $data)) {
                $object->setTotalBlockStorage($data['total_block_storage']);
                unset($data['total_block_storage']);
            }
            if (\array_key_exists('total_organizations', $data)) {
                $object->setTotalOrganizations($data['total_organizations']);
                unset($data['total_organizations']);
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
            $data['total_virtual_machines_launched'] = $object->getTotalVirtualMachinesLaunched();
            $data['total_virtual_machines_launched_today'] = $object->getTotalVirtualMachinesLaunchedToday();
            $data['total_memory'] = $object->getTotalMemory();
            $data['total_cpu_cores'] = $object->getTotalCpuCores();
            $data['total_block_storage'] = $object->getTotalBlockStorage();
            $data['total_organizations'] = $object->getTotalOrganizations();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\KatapultAPI\Public\Model\StatsGetResponse200::class => false];
        }
    }
}
