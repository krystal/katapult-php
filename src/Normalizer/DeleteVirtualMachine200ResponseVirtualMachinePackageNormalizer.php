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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DeleteVirtualMachine200ResponseVirtualMachinePackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachine200ResponseVirtualMachinePackage';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachine200ResponseVirtualMachinePackage';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\DeleteVirtualMachine200ResponseVirtualMachinePackage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('permalink', $data)) {
            $object->setPermalink($data['permalink']);
            unset($data['permalink']);
        }
        if (\array_key_exists('cpu_cores', $data)) {
            $object->setCpuCores($data['cpu_cores']);
            unset($data['cpu_cores']);
        }
        if (\array_key_exists('ipv4_addresses', $data)) {
            $object->setIpv4Addresses($data['ipv4_addresses']);
            unset($data['ipv4_addresses']);
        }
        if (\array_key_exists('memory_in_gb', $data)) {
            $object->setMemoryInGb($data['memory_in_gb']);
            unset($data['memory_in_gb']);
        }
        if (\array_key_exists('storage_in_gb', $data)) {
            $object->setStorageInGb($data['storage_in_gb']);
            unset($data['storage_in_gb']);
        }
        if (\array_key_exists('monthly_bandwidth_allowance_in_gb', $data) && $data['monthly_bandwidth_allowance_in_gb'] !== null) {
            $object->setMonthlyBandwidthAllowanceInGb($data['monthly_bandwidth_allowance_in_gb']);
            unset($data['monthly_bandwidth_allowance_in_gb']);
        } elseif (\array_key_exists('monthly_bandwidth_allowance_in_gb', $data) && $data['monthly_bandwidth_allowance_in_gb'] === null) {
            $object->setMonthlyBandwidthAllowanceInGb(null);
        }
        if (\array_key_exists('privacy', $data)) {
            $object->setPrivacy($data['privacy']);
            unset($data['privacy']);
        }
        if (\array_key_exists('icon', $data) && $data['icon'] !== null) {
            $object->setIcon($this->denormalizer->denormalize($data['icon'], 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachinePackageIcon', 'json', $context));
            unset($data['icon']);
        } elseif (\array_key_exists('icon', $data) && $data['icon'] === null) {
            $object->setIcon(null);
        }
        if (\array_key_exists('use_dedicated_cpus', $data)) {
            $object->setUseDedicatedCpus($data['use_dedicated_cpus']);
            unset($data['use_dedicated_cpus']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('permalink') && null !== $object->getPermalink()) {
            $data['permalink'] = $object->getPermalink();
        }
        if ($object->isInitialized('cpuCores') && null !== $object->getCpuCores()) {
            $data['cpu_cores'] = $object->getCpuCores();
        }
        if ($object->isInitialized('ipv4Addresses') && null !== $object->getIpv4Addresses()) {
            $data['ipv4_addresses'] = $object->getIpv4Addresses();
        }
        if ($object->isInitialized('memoryInGb') && null !== $object->getMemoryInGb()) {
            $data['memory_in_gb'] = $object->getMemoryInGb();
        }
        if ($object->isInitialized('storageInGb') && null !== $object->getStorageInGb()) {
            $data['storage_in_gb'] = $object->getStorageInGb();
        }
        if ($object->isInitialized('monthlyBandwidthAllowanceInGb') && null !== $object->getMonthlyBandwidthAllowanceInGb()) {
            $data['monthly_bandwidth_allowance_in_gb'] = $object->getMonthlyBandwidthAllowanceInGb();
        }
        if ($object->isInitialized('privacy') && null !== $object->getPrivacy()) {
            $data['privacy'] = $object->getPrivacy();
        }
        if ($object->isInitialized('icon') && null !== $object->getIcon()) {
            $data['icon'] = $this->normalizer->normalize($object->getIcon(), 'json', $context);
        }
        if ($object->isInitialized('useDedicatedCpus') && null !== $object->getUseDedicatedCpus()) {
            $data['use_dedicated_cpus'] = $object->getUseDedicatedCpus();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachine200ResponseVirtualMachinePackage' => false];
    }
}
