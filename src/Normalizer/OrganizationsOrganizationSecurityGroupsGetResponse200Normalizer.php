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

class OrganizationsOrganizationSecurityGroupsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationSecurityGroupsGetResponse200';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationSecurityGroupsGetResponse200';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\OrganizationsOrganizationSecurityGroupsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pagination', $data)) {
            $object->setPagination($this->denormalizer->denormalize($data['pagination'], 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationSecurityGroupsGetResponse200Pagination', 'json', $context));
            unset($data['pagination']);
        }
        if (\array_key_exists('security_groups', $data)) {
            $values = [];
            foreach ($data['security_groups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Krystal\\Katapult\\KatapultAPI\\Model\\SecurityGroup', 'json', $context);
            }
            $object->setSecurityGroups($values);
            unset($data['security_groups']);
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
        $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
        $values = [];
        foreach ($object->getSecurityGroups() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['security_groups'] = $values;
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationSecurityGroupsGetResponse200' => false];
    }
}
