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

class DeleteVirtualMachine200ResponseVirtualMachineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachine200ResponseVirtualMachine';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachine200ResponseVirtualMachine';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\DeleteVirtualMachine200ResponseVirtualMachine();
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
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('initial_root_password', $data)) {
            $object->setInitialRootPassword($data['initial_root_password']);
            unset($data['initial_root_password']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('zone', $data)) {
            $object->setZone($this->denormalizer->denormalize($data['zone'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachinePartZone', 'json', $context));
            unset($data['zone']);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachinePartOrganization', 'json', $context));
            unset($data['organization']);
        }
        if (\array_key_exists('group', $data)) {
            $object->setGroup($this->denormalizer->denormalize($data['group'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachinePartGroup', 'json', $context));
            unset($data['group']);
        }
        if (\array_key_exists('package', $data)) {
            $object->setPackage($this->denormalizer->denormalize($data['package'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachinePartPackage', 'json', $context));
            unset($data['package']);
        }
        if (\array_key_exists('attached_iso', $data)) {
            $object->setAttachedIso($this->denormalizer->denormalize($data['attached_iso'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachinePartAttachedISO', 'json', $context));
            unset($data['attached_iso']);
        }
        if (\array_key_exists('memory_in_gb', $data)) {
            $object->setMemoryInGb($data['memory_in_gb']);
            unset($data['memory_in_gb']);
        }
        if (\array_key_exists('cpu_cores', $data)) {
            $object->setCpuCores($data['cpu_cores']);
            unset($data['cpu_cores']);
        }
        if (\array_key_exists('gpu_type', $data)) {
            $object->setGpuType($this->denormalizer->denormalize($data['gpu_type'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachinePartGPUType', 'json', $context));
            unset($data['gpu_type']);
        }
        if (\array_key_exists('gpus', $data)) {
            $values = [];
            foreach ($data['gpus'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachinePartGPUs', 'json', $context);
            }
            $object->setGpus($values);
            unset($data['gpus']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachinePartTags', 'json', $context);
            }
            $object->setTags($values_1);
            unset($data['tags']);
        }
        if (\array_key_exists('tag_names', $data)) {
            $values_2 = [];
            foreach ($data['tag_names'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTagNames($values_2);
            unset($data['tag_names']);
        }
        if (\array_key_exists('ip_addresses', $data)) {
            $values_3 = [];
            foreach ($data['ip_addresses'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachinePartIPAddresses', 'json', $context);
            }
            $object->setIpAddresses($values_3);
            unset($data['ip_addresses']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
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
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('initialRootPassword') && null !== $object->getInitialRootPassword()) {
            $data['initial_root_password'] = $object->getInitialRootPassword();
        }
        if ($object->isInitialized('state') && null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if ($object->isInitialized('zone') && null !== $object->getZone()) {
            $data['zone'] = $this->normalizer->normalize($object->getZone(), 'json', $context);
        }
        if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        }
        if ($object->isInitialized('group') && null !== $object->getGroup()) {
            $data['group'] = $this->normalizer->normalize($object->getGroup(), 'json', $context);
        }
        if ($object->isInitialized('package') && null !== $object->getPackage()) {
            $data['package'] = $this->normalizer->normalize($object->getPackage(), 'json', $context);
        }
        if ($object->isInitialized('attachedIso') && null !== $object->getAttachedIso()) {
            $data['attached_iso'] = $this->normalizer->normalize($object->getAttachedIso(), 'json', $context);
        }
        if ($object->isInitialized('memoryInGb') && null !== $object->getMemoryInGb()) {
            $data['memory_in_gb'] = $object->getMemoryInGb();
        }
        if ($object->isInitialized('cpuCores') && null !== $object->getCpuCores()) {
            $data['cpu_cores'] = $object->getCpuCores();
        }
        if ($object->isInitialized('gpuType') && null !== $object->getGpuType()) {
            $data['gpu_type'] = $this->normalizer->normalize($object->getGpuType(), 'json', $context);
        }
        if ($object->isInitialized('gpus') && null !== $object->getGpus()) {
            $values = [];
            foreach ($object->getGpus() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['gpus'] = $values;
        }
        if ($object->isInitialized('tags') && null !== $object->getTags()) {
            $values_1 = [];
            foreach ($object->getTags() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['tags'] = $values_1;
        }
        if ($object->isInitialized('tagNames') && null !== $object->getTagNames()) {
            $values_2 = [];
            foreach ($object->getTagNames() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['tag_names'] = $values_2;
        }
        if ($object->isInitialized('ipAddresses') && null !== $object->getIpAddresses()) {
            $values_3 = [];
            foreach ($object->getIpAddresses() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['ip_addresses'] = $values_3;
        }
        foreach ($object as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_4;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\DeleteVirtualMachine200ResponseVirtualMachine' => false];
    }
}
