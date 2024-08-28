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
    class PolicyLimitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimits';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimits';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\PolicyLimits();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('uninvoiced_balance', $data)) {
                $object->setUninvoicedBalance($this->denormalizer->denormalize($data['uninvoiced_balance'], 'Krystal\\Katapult\\KatapultAPI\\Model\\FinancialPolicyLimit', 'json', $context));
                unset($data['uninvoiced_balance']);
            }
            if (\array_key_exists('virtual_machines', $data)) {
                $object->setVirtualMachines($this->denormalizer->denormalize($data['virtual_machines'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['virtual_machines']);
            }
            if (\array_key_exists('virtual_machine_memory', $data)) {
                $object->setVirtualMachineMemory($this->denormalizer->denormalize($data['virtual_machine_memory'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['virtual_machine_memory']);
            }
            if (\array_key_exists('managed_organizations', $data)) {
                $object->setManagedOrganizations($this->denormalizer->denormalize($data['managed_organizations'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['managed_organizations']);
            }
            if (\array_key_exists('unallocated_ip_addresses', $data)) {
                $object->setUnallocatedIpAddresses($this->denormalizer->denormalize($data['unallocated_ip_addresses'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['unallocated_ip_addresses']);
            }
            if (\array_key_exists('disk_space', $data)) {
                $object->setDiskSpace($this->denormalizer->denormalize($data['disk_space'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['disk_space']);
            }
            if (\array_key_exists('security_groups', $data)) {
                $object->setSecurityGroups($this->denormalizer->denormalize($data['security_groups'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['security_groups']);
            }
            if (\array_key_exists('virtual_networks', $data)) {
                $object->setVirtualNetworks($this->denormalizer->denormalize($data['virtual_networks'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['virtual_networks']);
            }
            if (\array_key_exists('load_balancers', $data)) {
                $object->setLoadBalancers($this->denormalizer->denormalize($data['load_balancers'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['load_balancers']);
            }
            if (\array_key_exists('dns_zones', $data)) {
                $object->setDnsZones($this->denormalizer->denormalize($data['dns_zones'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['dns_zones']);
            }
            if (\array_key_exists('certificates', $data)) {
                $object->setCertificates($this->denormalizer->denormalize($data['certificates'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['certificates']);
            }
            if (\array_key_exists('file_storage_volumes', $data)) {
                $object->setFileStorageVolumes($this->denormalizer->denormalize($data['file_storage_volumes'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['file_storage_volumes']);
            }
            if (\array_key_exists('isos', $data)) {
                $object->setIsos($this->denormalizer->denormalize($data['isos'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['isos']);
            }
            if (\array_key_exists('disk_iops', $data)) {
                $object->setDiskIops($this->denormalizer->denormalize($data['disk_iops'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimitWithoutCurrent', 'json', $context));
                unset($data['disk_iops']);
            }
            if (\array_key_exists('network_speed', $data)) {
                $object->setNetworkSpeed($this->denormalizer->denormalize($data['network_speed'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimitWithoutCurrent', 'json', $context));
                unset($data['network_speed']);
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
            if ($object->isInitialized('uninvoicedBalance') && null !== $object->getUninvoicedBalance()) {
                $data['uninvoiced_balance'] = $this->normalizer->normalize($object->getUninvoicedBalance(), 'json', $context);
            }
            if ($object->isInitialized('virtualMachines') && null !== $object->getVirtualMachines()) {
                $data['virtual_machines'] = $this->normalizer->normalize($object->getVirtualMachines(), 'json', $context);
            }
            if ($object->isInitialized('virtualMachineMemory') && null !== $object->getVirtualMachineMemory()) {
                $data['virtual_machine_memory'] = $this->normalizer->normalize($object->getVirtualMachineMemory(), 'json', $context);
            }
            if ($object->isInitialized('managedOrganizations') && null !== $object->getManagedOrganizations()) {
                $data['managed_organizations'] = $this->normalizer->normalize($object->getManagedOrganizations(), 'json', $context);
            }
            if ($object->isInitialized('unallocatedIpAddresses') && null !== $object->getUnallocatedIpAddresses()) {
                $data['unallocated_ip_addresses'] = $this->normalizer->normalize($object->getUnallocatedIpAddresses(), 'json', $context);
            }
            if ($object->isInitialized('diskSpace') && null !== $object->getDiskSpace()) {
                $data['disk_space'] = $this->normalizer->normalize($object->getDiskSpace(), 'json', $context);
            }
            if ($object->isInitialized('securityGroups') && null !== $object->getSecurityGroups()) {
                $data['security_groups'] = $this->normalizer->normalize($object->getSecurityGroups(), 'json', $context);
            }
            if ($object->isInitialized('virtualNetworks') && null !== $object->getVirtualNetworks()) {
                $data['virtual_networks'] = $this->normalizer->normalize($object->getVirtualNetworks(), 'json', $context);
            }
            if ($object->isInitialized('loadBalancers') && null !== $object->getLoadBalancers()) {
                $data['load_balancers'] = $this->normalizer->normalize($object->getLoadBalancers(), 'json', $context);
            }
            if ($object->isInitialized('dnsZones') && null !== $object->getDnsZones()) {
                $data['dns_zones'] = $this->normalizer->normalize($object->getDnsZones(), 'json', $context);
            }
            if ($object->isInitialized('certificates') && null !== $object->getCertificates()) {
                $data['certificates'] = $this->normalizer->normalize($object->getCertificates(), 'json', $context);
            }
            if ($object->isInitialized('fileStorageVolumes') && null !== $object->getFileStorageVolumes()) {
                $data['file_storage_volumes'] = $this->normalizer->normalize($object->getFileStorageVolumes(), 'json', $context);
            }
            if ($object->isInitialized('isos') && null !== $object->getIsos()) {
                $data['isos'] = $this->normalizer->normalize($object->getIsos(), 'json', $context);
            }
            if ($object->isInitialized('diskIops') && null !== $object->getDiskIops()) {
                $data['disk_iops'] = $this->normalizer->normalize($object->getDiskIops(), 'json', $context);
            }
            if ($object->isInitialized('networkSpeed') && null !== $object->getNetworkSpeed()) {
                $data['network_speed'] = $this->normalizer->normalize($object->getNetworkSpeed(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimits' => false];
        }
    }
} else {
    class PolicyLimitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimits';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimits';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\PolicyLimits();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('uninvoiced_balance', $data)) {
                $object->setUninvoicedBalance($this->denormalizer->denormalize($data['uninvoiced_balance'], 'Krystal\\Katapult\\KatapultAPI\\Model\\FinancialPolicyLimit', 'json', $context));
                unset($data['uninvoiced_balance']);
            }
            if (\array_key_exists('virtual_machines', $data)) {
                $object->setVirtualMachines($this->denormalizer->denormalize($data['virtual_machines'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['virtual_machines']);
            }
            if (\array_key_exists('virtual_machine_memory', $data)) {
                $object->setVirtualMachineMemory($this->denormalizer->denormalize($data['virtual_machine_memory'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['virtual_machine_memory']);
            }
            if (\array_key_exists('managed_organizations', $data)) {
                $object->setManagedOrganizations($this->denormalizer->denormalize($data['managed_organizations'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['managed_organizations']);
            }
            if (\array_key_exists('unallocated_ip_addresses', $data)) {
                $object->setUnallocatedIpAddresses($this->denormalizer->denormalize($data['unallocated_ip_addresses'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['unallocated_ip_addresses']);
            }
            if (\array_key_exists('disk_space', $data)) {
                $object->setDiskSpace($this->denormalizer->denormalize($data['disk_space'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['disk_space']);
            }
            if (\array_key_exists('security_groups', $data)) {
                $object->setSecurityGroups($this->denormalizer->denormalize($data['security_groups'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['security_groups']);
            }
            if (\array_key_exists('virtual_networks', $data)) {
                $object->setVirtualNetworks($this->denormalizer->denormalize($data['virtual_networks'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['virtual_networks']);
            }
            if (\array_key_exists('load_balancers', $data)) {
                $object->setLoadBalancers($this->denormalizer->denormalize($data['load_balancers'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['load_balancers']);
            }
            if (\array_key_exists('dns_zones', $data)) {
                $object->setDnsZones($this->denormalizer->denormalize($data['dns_zones'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['dns_zones']);
            }
            if (\array_key_exists('certificates', $data)) {
                $object->setCertificates($this->denormalizer->denormalize($data['certificates'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['certificates']);
            }
            if (\array_key_exists('file_storage_volumes', $data)) {
                $object->setFileStorageVolumes($this->denormalizer->denormalize($data['file_storage_volumes'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['file_storage_volumes']);
            }
            if (\array_key_exists('isos', $data)) {
                $object->setIsos($this->denormalizer->denormalize($data['isos'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimit', 'json', $context));
                unset($data['isos']);
            }
            if (\array_key_exists('disk_iops', $data)) {
                $object->setDiskIops($this->denormalizer->denormalize($data['disk_iops'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimitWithoutCurrent', 'json', $context));
                unset($data['disk_iops']);
            }
            if (\array_key_exists('network_speed', $data)) {
                $object->setNetworkSpeed($this->denormalizer->denormalize($data['network_speed'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimitWithoutCurrent', 'json', $context));
                unset($data['network_speed']);
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
            if ($object->isInitialized('uninvoicedBalance') && null !== $object->getUninvoicedBalance()) {
                $data['uninvoiced_balance'] = $this->normalizer->normalize($object->getUninvoicedBalance(), 'json', $context);
            }
            if ($object->isInitialized('virtualMachines') && null !== $object->getVirtualMachines()) {
                $data['virtual_machines'] = $this->normalizer->normalize($object->getVirtualMachines(), 'json', $context);
            }
            if ($object->isInitialized('virtualMachineMemory') && null !== $object->getVirtualMachineMemory()) {
                $data['virtual_machine_memory'] = $this->normalizer->normalize($object->getVirtualMachineMemory(), 'json', $context);
            }
            if ($object->isInitialized('managedOrganizations') && null !== $object->getManagedOrganizations()) {
                $data['managed_organizations'] = $this->normalizer->normalize($object->getManagedOrganizations(), 'json', $context);
            }
            if ($object->isInitialized('unallocatedIpAddresses') && null !== $object->getUnallocatedIpAddresses()) {
                $data['unallocated_ip_addresses'] = $this->normalizer->normalize($object->getUnallocatedIpAddresses(), 'json', $context);
            }
            if ($object->isInitialized('diskSpace') && null !== $object->getDiskSpace()) {
                $data['disk_space'] = $this->normalizer->normalize($object->getDiskSpace(), 'json', $context);
            }
            if ($object->isInitialized('securityGroups') && null !== $object->getSecurityGroups()) {
                $data['security_groups'] = $this->normalizer->normalize($object->getSecurityGroups(), 'json', $context);
            }
            if ($object->isInitialized('virtualNetworks') && null !== $object->getVirtualNetworks()) {
                $data['virtual_networks'] = $this->normalizer->normalize($object->getVirtualNetworks(), 'json', $context);
            }
            if ($object->isInitialized('loadBalancers') && null !== $object->getLoadBalancers()) {
                $data['load_balancers'] = $this->normalizer->normalize($object->getLoadBalancers(), 'json', $context);
            }
            if ($object->isInitialized('dnsZones') && null !== $object->getDnsZones()) {
                $data['dns_zones'] = $this->normalizer->normalize($object->getDnsZones(), 'json', $context);
            }
            if ($object->isInitialized('certificates') && null !== $object->getCertificates()) {
                $data['certificates'] = $this->normalizer->normalize($object->getCertificates(), 'json', $context);
            }
            if ($object->isInitialized('fileStorageVolumes') && null !== $object->getFileStorageVolumes()) {
                $data['file_storage_volumes'] = $this->normalizer->normalize($object->getFileStorageVolumes(), 'json', $context);
            }
            if ($object->isInitialized('isos') && null !== $object->getIsos()) {
                $data['isos'] = $this->normalizer->normalize($object->getIsos(), 'json', $context);
            }
            if ($object->isInitialized('diskIops') && null !== $object->getDiskIops()) {
                $data['disk_iops'] = $this->normalizer->normalize($object->getDiskIops(), 'json', $context);
            }
            if ($object->isInitialized('networkSpeed') && null !== $object->getNetworkSpeed()) {
                $data['network_speed'] = $this->normalizer->normalize($object->getNetworkSpeed(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\PolicyLimits' => false];
        }
    }
}
