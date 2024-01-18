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

class VirtualMachinePackagesGetResponse200PaginationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachinePackagesGetResponse200Pagination';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachinePackagesGetResponse200Pagination';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\VirtualMachinePackagesGetResponse200Pagination();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('current_page', $data)) {
            $object->setCurrentPage($data['current_page']);
            unset($data['current_page']);
        }
        if (\array_key_exists('total_pages', $data)) {
            $object->setTotalPages($data['total_pages']);
            unset($data['total_pages']);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
            unset($data['total']);
        }
        if (\array_key_exists('per_page', $data)) {
            $object->setPerPage($data['per_page']);
            unset($data['per_page']);
        }
        if (\array_key_exists('large_set', $data)) {
            $object->setLargeSet($data['large_set']);
            unset($data['large_set']);
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
        if ($object->isInitialized('currentPage') && null !== $object->getCurrentPage()) {
            $data['current_page'] = $object->getCurrentPage();
        }
        if ($object->isInitialized('totalPages') && null !== $object->getTotalPages()) {
            $data['total_pages'] = $object->getTotalPages();
        }
        if ($object->isInitialized('total') && null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        if ($object->isInitialized('perPage') && null !== $object->getPerPage()) {
            $data['per_page'] = $object->getPerPage();
        }
        if ($object->isInitialized('largeSet') && null !== $object->getLargeSet()) {
            $data['large_set'] = $object->getLargeSet();
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
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachinePackagesGetResponse200Pagination' => false];
    }
}
