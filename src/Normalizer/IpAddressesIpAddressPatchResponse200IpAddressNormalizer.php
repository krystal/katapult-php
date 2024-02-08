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

class IpAddressesIpAddressPatchResponse200IpAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\IpAddressesIpAddressPatchResponse200IpAddress';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\IpAddressesIpAddressPatchResponse200IpAddress';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\IpAddressesIpAddressPatchResponse200IpAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
            unset($data['address']);
        }
        if (\array_key_exists('reverse_dns', $data)) {
            $object->setReverseDns($data['reverse_dns']);
            unset($data['reverse_dns']);
        }
        if (\array_key_exists('vip', $data)) {
            $object->setVip($data['vip']);
            unset($data['vip']);
        }
        if (\array_key_exists('label', $data) && $data['label'] !== null) {
            $object->setLabel($data['label']);
            unset($data['label']);
        } elseif (\array_key_exists('label', $data) && $data['label'] === null) {
            $object->setLabel(null);
        }
        if (\array_key_exists('address_with_mask', $data)) {
            $object->setAddressWithMask($data['address_with_mask']);
            unset($data['address_with_mask']);
        }
        if (\array_key_exists('network', $data)) {
            $object->setNetwork($this->denormalizer->denormalize($data['network'], 'Krystal\\Katapult\\KatapultAPI\\Model\\Network', 'json', $context));
            unset($data['network']);
        }
        if (\array_key_exists('allocation_id', $data) && $data['allocation_id'] !== null) {
            $object->setAllocationId($data['allocation_id']);
            unset($data['allocation_id']);
        } elseif (\array_key_exists('allocation_id', $data) && $data['allocation_id'] === null) {
            $object->setAllocationId(null);
        }
        if (\array_key_exists('allocation_type', $data) && $data['allocation_type'] !== null) {
            $object->setAllocationType($data['allocation_type']);
            unset($data['allocation_type']);
        } elseif (\array_key_exists('allocation_type', $data) && $data['allocation_type'] === null) {
            $object->setAllocationType(null);
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
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if ($object->isInitialized('reverseDns') && null !== $object->getReverseDns()) {
            $data['reverse_dns'] = $object->getReverseDns();
        }
        if ($object->isInitialized('vip') && null !== $object->getVip()) {
            $data['vip'] = $object->getVip();
        }
        if ($object->isInitialized('label') && null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if ($object->isInitialized('addressWithMask') && null !== $object->getAddressWithMask()) {
            $data['address_with_mask'] = $object->getAddressWithMask();
        }
        if ($object->isInitialized('network') && null !== $object->getNetwork()) {
            $data['network'] = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
        }
        if ($object->isInitialized('allocationId') && null !== $object->getAllocationId()) {
            $data['allocation_id'] = $object->getAllocationId();
        }
        if ($object->isInitialized('allocationType') && null !== $object->getAllocationType()) {
            $data['allocation_type'] = $object->getAllocationType();
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
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\IpAddressesIpAddressPatchResponse200IpAddress' => false];
    }
}
