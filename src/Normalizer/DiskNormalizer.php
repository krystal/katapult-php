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

class DiskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\Disk';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\Disk';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\Disk();
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
        if (\array_key_exists('size_in_gb', $data)) {
            $object->setSizeInGb($data['size_in_gb']);
            unset($data['size_in_gb']);
        }
        if (\array_key_exists('wwn', $data)) {
            $object->setWwn($data['wwn']);
            unset($data['wwn']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('storage_speed', $data)) {
            $object->setStorageSpeed($data['storage_speed']);
            unset($data['storage_speed']);
        }
        if (\array_key_exists('io_profile', $data)) {
            $object->setIoProfile($this->denormalizer->denormalize($data['io_profile'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskIOProfile', 'json', $context));
            unset($data['io_profile']);
        }
        if (\array_key_exists('virtual_machine_disk', $data)) {
            $object->setVirtualMachineDisk($this->denormalizer->denormalize($data['virtual_machine_disk'], 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineDisk', 'json', $context));
            unset($data['virtual_machine_disk']);
        }
        if (\array_key_exists('installation', $data)) {
            $object->setInstallation($this->denormalizer->denormalize($data['installation'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DiskInstallation', 'json', $context));
            unset($data['installation']);
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
        if ($object->isInitialized('sizeInGb') && null !== $object->getSizeInGb()) {
            $data['size_in_gb'] = $object->getSizeInGb();
        }
        if ($object->isInitialized('wwn') && null !== $object->getWwn()) {
            $data['wwn'] = $object->getWwn();
        }
        if ($object->isInitialized('state') && null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('storageSpeed') && null !== $object->getStorageSpeed()) {
            $data['storage_speed'] = $object->getStorageSpeed();
        }
        if ($object->isInitialized('ioProfile') && null !== $object->getIoProfile()) {
            $data['io_profile'] = $this->normalizer->normalize($object->getIoProfile(), 'json', $context);
        }
        if ($object->isInitialized('virtualMachineDisk') && null !== $object->getVirtualMachineDisk()) {
            $data['virtual_machine_disk'] = $this->normalizer->normalize($object->getVirtualMachineDisk(), 'json', $context);
        }
        if ($object->isInitialized('installation') && null !== $object->getInstallation()) {
            $data['installation'] = $this->normalizer->normalize($object->getInstallation(), 'json', $context);
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
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\Disk' => false];
    }
}
