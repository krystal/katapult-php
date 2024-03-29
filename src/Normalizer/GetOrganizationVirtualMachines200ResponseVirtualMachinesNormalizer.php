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

class GetOrganizationVirtualMachines200ResponseVirtualMachinesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\GetOrganizationVirtualMachines200ResponseVirtualMachines';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\GetOrganizationVirtualMachines200ResponseVirtualMachines';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\GetOrganizationVirtualMachines200ResponseVirtualMachines();
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
        if (\array_key_exists('hostname', $data)) {
            $object->setHostname($data['hostname']);
            unset($data['hostname']);
        }
        if (\array_key_exists('fqdn', $data)) {
            $object->setFqdn($data['fqdn']);
            unset($data['fqdn']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('zone', $data)) {
            $object->setZone($this->denormalizer->denormalize($data['zone'], 'Krystal\\Katapult\\KatapultAPI\\Model\\Zone', 'json', $context));
            unset($data['zone']);
        }
        if (\array_key_exists('package', $data) && $data['package'] !== null) {
            $object->setPackage($this->denormalizer->denormalize($data['package'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetOrganizationVirtualMachines200ResponseVirtualMachinesPackage', 'json', $context));
            unset($data['package']);
        } elseif (\array_key_exists('package', $data) && $data['package'] === null) {
            $object->setPackage(null);
        }
        if (\array_key_exists('gpu_type', $data) && $data['gpu_type'] !== null) {
            $object->setGpuType($this->denormalizer->denormalize($data['gpu_type'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetOrganizationVirtualMachines200ResponseVirtualMachinesGpuType', 'json', $context));
            unset($data['gpu_type']);
        } elseif (\array_key_exists('gpu_type', $data) && $data['gpu_type'] === null) {
            $object->setGpuType(null);
        }
        if (\array_key_exists('ip_addresses', $data)) {
            $values = [];
            foreach ($data['ip_addresses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Krystal\\Katapult\\KatapultAPI\\Model\\GetOrganizationVirtualMachinesPartIPAddresses', 'json', $context);
            }
            $object->setIpAddresses($values);
            unset($data['ip_addresses']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
            $data['hostname'] = $object->getHostname();
        }
        if ($object->isInitialized('fqdn') && null !== $object->getFqdn()) {
            $data['fqdn'] = $object->getFqdn();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('zone') && null !== $object->getZone()) {
            $data['zone'] = $this->normalizer->normalize($object->getZone(), 'json', $context);
        }
        if ($object->isInitialized('package') && null !== $object->getPackage()) {
            $data['package'] = $this->normalizer->normalize($object->getPackage(), 'json', $context);
        }
        if ($object->isInitialized('gpuType') && null !== $object->getGpuType()) {
            $data['gpu_type'] = $this->normalizer->normalize($object->getGpuType(), 'json', $context);
        }
        if ($object->isInitialized('ipAddresses') && null !== $object->getIpAddresses()) {
            $values = [];
            foreach ($object->getIpAddresses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ip_addresses'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\GetOrganizationVirtualMachines200ResponseVirtualMachines' => false];
    }
}
