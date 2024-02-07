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

class GetDisk200ResponseDiskVirtualMachineDiskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\GetDisk200ResponseDiskVirtualMachineDisk';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\GetDisk200ResponseDiskVirtualMachineDisk';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\GetDisk200ResponseDiskVirtualMachineDisk();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('virtual_machine', $data)) {
            $object->setVirtualMachine($this->denormalizer->denormalize($data['virtual_machine'], 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachine', 'json', $context));
            unset($data['virtual_machine']);
        }
        if (\array_key_exists('disk', $data)) {
            $object->setDisk($this->denormalizer->denormalize($data['disk'], 'Krystal\\Katapult\\KatapultAPI\\Model\\Disk', 'json', $context));
            unset($data['disk']);
        }
        if (\array_key_exists('attach_on_boot', $data)) {
            $object->setAttachOnBoot($data['attach_on_boot']);
            unset($data['attach_on_boot']);
        }
        if (\array_key_exists('boot', $data)) {
            $object->setBoot($data['boot']);
            unset($data['boot']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
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
        if ($object->isInitialized('virtualMachine') && null !== $object->getVirtualMachine()) {
            $data['virtual_machine'] = $this->normalizer->normalize($object->getVirtualMachine(), 'json', $context);
        }
        if ($object->isInitialized('disk') && null !== $object->getDisk()) {
            $data['disk'] = $this->normalizer->normalize($object->getDisk(), 'json', $context);
        }
        if ($object->isInitialized('attachOnBoot') && null !== $object->getAttachOnBoot()) {
            $data['attach_on_boot'] = $object->getAttachOnBoot();
        }
        if ($object->isInitialized('boot') && null !== $object->getBoot()) {
            $data['boot'] = $object->getBoot();
        }
        if ($object->isInitialized('state') && null !== $object->getState()) {
            $data['state'] = $object->getState();
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
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\GetDisk200ResponseDiskVirtualMachineDisk' => false];
    }
}
