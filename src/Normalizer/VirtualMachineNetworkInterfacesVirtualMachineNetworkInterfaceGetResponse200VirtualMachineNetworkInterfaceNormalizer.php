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
    class VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceGetResponse200VirtualMachineNetworkInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceGetResponse200VirtualMachineNetworkInterface';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceGetResponse200VirtualMachineNetworkInterface';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceGetResponse200VirtualMachineNetworkInterface();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('virtual_machine', $data)) {
                $object->setVirtualMachine($this->denormalizer->denormalize($data['virtual_machine'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetVMNIVMNIPartVirtualMachine', 'json', $context));
                unset($data['virtual_machine']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('network', $data)) {
                $object->setNetwork($this->denormalizer->denormalize($data['network'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetVMNIVMNIPartNetwork', 'json', $context));
                unset($data['network']);
            }
            if (\array_key_exists('mac_address', $data)) {
                $object->setMacAddress($data['mac_address']);
                unset($data['mac_address']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('ip_addresses', $data)) {
                $values = [];
                foreach ($data['ip_addresses'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Krystal\\Katapult\\KatapultAPI\\Model\\GetVMNIVMNIPartIPAddresses', 'json', $context);
                }
                $object->setIpAddresses($values);
                unset($data['ip_addresses']);
            }
            if (\array_key_exists('speed_profile', $data)) {
                $object->setSpeedProfile($this->denormalizer->denormalize($data['speed_profile'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetVMNIVMNIPartSpeedProfile', 'json', $context));
                unset($data['speed_profile']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('virtualMachine') && null !== $object->getVirtualMachine()) {
                $data['virtual_machine'] = $this->normalizer->normalize($object->getVirtualMachine(), 'json', $context);
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('network') && null !== $object->getNetwork()) {
                $data['network'] = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['mac_address'] = $object->getMacAddress();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('ipAddresses') && null !== $object->getIpAddresses()) {
                $values = [];
                foreach ($object->getIpAddresses() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ip_addresses'] = $values;
            }
            if ($object->isInitialized('speedProfile') && null !== $object->getSpeedProfile()) {
                $data['speed_profile'] = $this->normalizer->normalize($object->getSpeedProfile(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceGetResponse200VirtualMachineNetworkInterface' => false];
        }
    }
} else {
    class VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceGetResponse200VirtualMachineNetworkInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceGetResponse200VirtualMachineNetworkInterface';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceGetResponse200VirtualMachineNetworkInterface';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceGetResponse200VirtualMachineNetworkInterface();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('virtual_machine', $data)) {
                $object->setVirtualMachine($this->denormalizer->denormalize($data['virtual_machine'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetVMNIVMNIPartVirtualMachine', 'json', $context));
                unset($data['virtual_machine']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('network', $data)) {
                $object->setNetwork($this->denormalizer->denormalize($data['network'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetVMNIVMNIPartNetwork', 'json', $context));
                unset($data['network']);
            }
            if (\array_key_exists('mac_address', $data)) {
                $object->setMacAddress($data['mac_address']);
                unset($data['mac_address']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('ip_addresses', $data)) {
                $values = [];
                foreach ($data['ip_addresses'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Krystal\\Katapult\\KatapultAPI\\Model\\GetVMNIVMNIPartIPAddresses', 'json', $context);
                }
                $object->setIpAddresses($values);
                unset($data['ip_addresses']);
            }
            if (\array_key_exists('speed_profile', $data)) {
                $object->setSpeedProfile($this->denormalizer->denormalize($data['speed_profile'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetVMNIVMNIPartSpeedProfile', 'json', $context));
                unset($data['speed_profile']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('virtualMachine') && null !== $object->getVirtualMachine()) {
                $data['virtual_machine'] = $this->normalizer->normalize($object->getVirtualMachine(), 'json', $context);
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('network') && null !== $object->getNetwork()) {
                $data['network'] = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['mac_address'] = $object->getMacAddress();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('ipAddresses') && null !== $object->getIpAddresses()) {
                $values = [];
                foreach ($object->getIpAddresses() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ip_addresses'] = $values;
            }
            if ($object->isInitialized('speedProfile') && null !== $object->getSpeedProfile()) {
                $data['speed_profile'] = $this->normalizer->normalize($object->getSpeedProfile(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceGetResponse200VirtualMachineNetworkInterface' => false];
        }
    }
}
