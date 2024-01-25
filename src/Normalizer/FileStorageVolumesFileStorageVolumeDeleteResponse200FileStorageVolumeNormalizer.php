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

class FileStorageVolumesFileStorageVolumeDeleteResponse200FileStorageVolumeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\FileStorageVolumesFileStorageVolumeDeleteResponse200FileStorageVolume';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\FileStorageVolumesFileStorageVolumeDeleteResponse200FileStorageVolume';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\FileStorageVolumesFileStorageVolumeDeleteResponse200FileStorageVolume();
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
        if (\array_key_exists('data_center', $data)) {
            $object->setDataCenter($this->denormalizer->denormalize($data['data_center'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DeleteFileStorageVolume200ResponseFileStorageVolumeDataCenter', 'json', $context));
            unset($data['data_center']);
        }
        if (\array_key_exists('associations', $data)) {
            $values = [];
            foreach ($data['associations'] as $value) {
                $values[] = $value;
            }
            $object->setAssociations($values);
            unset($data['associations']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('nfs_location', $data) && $data['nfs_location'] !== null) {
            $object->setNfsLocation($data['nfs_location']);
            unset($data['nfs_location']);
        } elseif (\array_key_exists('nfs_location', $data) && $data['nfs_location'] === null) {
            $object->setNfsLocation(null);
        }
        if (\array_key_exists('size', $data) && $data['size'] !== null) {
            $object->setSize($data['size']);
            unset($data['size']);
        } elseif (\array_key_exists('size', $data) && $data['size'] === null) {
            $object->setSize(null);
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
        if ($object->isInitialized('dataCenter') && null !== $object->getDataCenter()) {
            $data['data_center'] = $this->normalizer->normalize($object->getDataCenter(), 'json', $context);
        }
        if ($object->isInitialized('associations') && null !== $object->getAssociations()) {
            $values = [];
            foreach ($object->getAssociations() as $value) {
                $values[] = $value;
            }
            $data['associations'] = $values;
        }
        if ($object->isInitialized('state') && null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if ($object->isInitialized('nfsLocation') && null !== $object->getNfsLocation()) {
            $data['nfs_location'] = $object->getNfsLocation();
        }
        if ($object->isInitialized('size') && null !== $object->getSize()) {
            $data['size'] = $object->getSize();
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
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\FileStorageVolumesFileStorageVolumeDeleteResponse200FileStorageVolume' => false];
    }
}
