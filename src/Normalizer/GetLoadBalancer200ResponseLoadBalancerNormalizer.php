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

class GetLoadBalancer200ResponseLoadBalancerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\GetLoadBalancer200ResponseLoadBalancer';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\GetLoadBalancer200ResponseLoadBalancer';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\GetLoadBalancer200ResponseLoadBalancer();
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
        if (\array_key_exists('api_reference', $data) && $data['api_reference'] !== null) {
            $object->setApiReference($data['api_reference']);
            unset($data['api_reference']);
        } elseif (\array_key_exists('api_reference', $data) && $data['api_reference'] === null) {
            $object->setApiReference(null);
        }
        if (\array_key_exists('resource_type', $data)) {
            $object->setResourceType($data['resource_type']);
            unset($data['resource_type']);
        }
        if (\array_key_exists('resources', $data)) {
            $values = [];
            foreach ($data['resources'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Krystal\\Katapult\\KatapultAPI\\Model\\LoadBalancerResource', 'json', $context);
            }
            $object->setResources($values);
            unset($data['resources']);
        }
        if (\array_key_exists('resource_ids', $data)) {
            $values_1 = [];
            foreach ($data['resource_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setResourceIds($values_1);
            unset($data['resource_ids']);
        }
        if (\array_key_exists('ip_address', $data)) {
            $object->setIpAddress($this->denormalizer->denormalize($data['ip_address'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetLoadBalancerPartIPAddress', 'json', $context));
            unset($data['ip_address']);
        }
        if (\array_key_exists('https_redirect', $data)) {
            $object->setHttpsRedirect($data['https_redirect']);
            unset($data['https_redirect']);
        }
        if (\array_key_exists('backend_certificate', $data)) {
            $object->setBackendCertificate($data['backend_certificate']);
            unset($data['backend_certificate']);
        }
        if (\array_key_exists('backend_certificate_key', $data)) {
            $object->setBackendCertificateKey($data['backend_certificate_key']);
            unset($data['backend_certificate_key']);
        }
        if (\array_key_exists('data_center', $data)) {
            $object->setDataCenter($this->denormalizer->denormalize($data['data_center'], 'Krystal\\Katapult\\KatapultAPI\\Model\\GetLoadBalancerPartDataCenter', 'json', $context));
            unset($data['data_center']);
        }
        if (\array_key_exists('enable_weighting', $data)) {
            $object->setEnableWeighting($data['enable_weighting']);
            unset($data['enable_weighting']);
        }
        if (\array_key_exists('weights', $data)) {
            $values_2 = [];
            foreach ($data['weights'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Krystal\\Katapult\\KatapultAPI\\Model\\LoadBalancerWeight', 'json', $context);
            }
            $object->setWeights($values_2);
            unset($data['weights']);
        }
        if (\array_key_exists('standby_vms', $data)) {
            $values_3 = [];
            foreach ($data['standby_vms'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setStandbyVms($values_3);
            unset($data['standby_vms']);
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
        if ($object->isInitialized('apiReference') && null !== $object->getApiReference()) {
            $data['api_reference'] = $object->getApiReference();
        }
        if ($object->isInitialized('resourceType') && null !== $object->getResourceType()) {
            $data['resource_type'] = $object->getResourceType();
        }
        if ($object->isInitialized('resources') && null !== $object->getResources()) {
            $values = [];
            foreach ($object->getResources() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['resources'] = $values;
        }
        if ($object->isInitialized('resourceIds') && null !== $object->getResourceIds()) {
            $values_1 = [];
            foreach ($object->getResourceIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['resource_ids'] = $values_1;
        }
        if ($object->isInitialized('ipAddress') && null !== $object->getIpAddress()) {
            $data['ip_address'] = $this->normalizer->normalize($object->getIpAddress(), 'json', $context);
        }
        if ($object->isInitialized('httpsRedirect') && null !== $object->getHttpsRedirect()) {
            $data['https_redirect'] = $object->getHttpsRedirect();
        }
        if ($object->isInitialized('backendCertificate') && null !== $object->getBackendCertificate()) {
            $data['backend_certificate'] = $object->getBackendCertificate();
        }
        if ($object->isInitialized('backendCertificateKey') && null !== $object->getBackendCertificateKey()) {
            $data['backend_certificate_key'] = $object->getBackendCertificateKey();
        }
        if ($object->isInitialized('dataCenter') && null !== $object->getDataCenter()) {
            $data['data_center'] = $this->normalizer->normalize($object->getDataCenter(), 'json', $context);
        }
        if ($object->isInitialized('enableWeighting') && null !== $object->getEnableWeighting()) {
            $data['enable_weighting'] = $object->getEnableWeighting();
        }
        if ($object->isInitialized('weights') && null !== $object->getWeights()) {
            $values_2 = [];
            foreach ($object->getWeights() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['weights'] = $values_2;
        }
        if ($object->isInitialized('standbyVms') && null !== $object->getStandbyVms()) {
            $values_3 = [];
            foreach ($object->getStandbyVms() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['standby_vms'] = $values_3;
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
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\GetLoadBalancer200ResponseLoadBalancer' => false];
    }
}
