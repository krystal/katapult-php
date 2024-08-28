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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class LoadBalancerArgumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\LoadBalancerArguments';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\LoadBalancerArguments';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\LoadBalancerArguments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('api_reference', $data)) {
                $object->setApiReference($data['api_reference']);
                unset($data['api_reference']);
            }
            if (\array_key_exists('resource_type', $data)) {
                $object->setResourceType($data['resource_type']);
                unset($data['resource_type']);
            }
            if (\array_key_exists('resource_ids', $data)) {
                $values = [];
                foreach ($data['resource_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setResourceIds($values);
                unset($data['resource_ids']);
            }
            if (\array_key_exists('data_center', $data)) {
                $object->setDataCenter($this->denormalizer->denormalize($data['data_center'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DataCenterLookup', 'json', $context));
                unset($data['data_center']);
            }
            if (\array_key_exists('https_redirect', $data)) {
                $object->setHttpsRedirect($data['https_redirect']);
                unset($data['https_redirect']);
            }
            if (\array_key_exists('enable_weighting', $data)) {
                $object->setEnableWeighting($data['enable_weighting']);
                unset($data['enable_weighting']);
            }
            if (\array_key_exists('weights', $data)) {
                $values_1 = [];
                foreach ($data['weights'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Krystal\\Katapult\\KatapultAPI\\Model\\LoadBalancerWeightsArguments', 'json', $context);
                }
                $object->setWeights($values_1);
                unset($data['weights']);
            }
            if (\array_key_exists('standby_vms', $data)) {
                $values_2 = [];
                foreach ($data['standby_vms'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setStandbyVms($values_2);
                unset($data['standby_vms']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('apiReference') && null !== $object->getApiReference()) {
                $data['api_reference'] = $object->getApiReference();
            }
            if ($object->isInitialized('resourceType') && null !== $object->getResourceType()) {
                $data['resource_type'] = $object->getResourceType();
            }
            if ($object->isInitialized('resourceIds') && null !== $object->getResourceIds()) {
                $values = [];
                foreach ($object->getResourceIds() as $value) {
                    $values[] = $value;
                }
                $data['resource_ids'] = $values;
            }
            if ($object->isInitialized('dataCenter') && null !== $object->getDataCenter()) {
                $data['data_center'] = $this->normalizer->normalize($object->getDataCenter(), 'json', $context);
            }
            if ($object->isInitialized('httpsRedirect') && null !== $object->getHttpsRedirect()) {
                $data['https_redirect'] = $object->getHttpsRedirect();
            }
            if ($object->isInitialized('enableWeighting') && null !== $object->getEnableWeighting()) {
                $data['enable_weighting'] = $object->getEnableWeighting();
            }
            if ($object->isInitialized('weights') && null !== $object->getWeights()) {
                $values_1 = [];
                foreach ($object->getWeights() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['weights'] = $values_1;
            }
            if ($object->isInitialized('standbyVms') && null !== $object->getStandbyVms()) {
                $values_2 = [];
                foreach ($object->getStandbyVms() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['standby_vms'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\LoadBalancerArguments' => false];
        }
    }
} else {
    class LoadBalancerArgumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\LoadBalancerArguments';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\LoadBalancerArguments';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\LoadBalancerArguments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('api_reference', $data)) {
                $object->setApiReference($data['api_reference']);
                unset($data['api_reference']);
            }
            if (\array_key_exists('resource_type', $data)) {
                $object->setResourceType($data['resource_type']);
                unset($data['resource_type']);
            }
            if (\array_key_exists('resource_ids', $data)) {
                $values = [];
                foreach ($data['resource_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setResourceIds($values);
                unset($data['resource_ids']);
            }
            if (\array_key_exists('data_center', $data)) {
                $object->setDataCenter($this->denormalizer->denormalize($data['data_center'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DataCenterLookup', 'json', $context));
                unset($data['data_center']);
            }
            if (\array_key_exists('https_redirect', $data)) {
                $object->setHttpsRedirect($data['https_redirect']);
                unset($data['https_redirect']);
            }
            if (\array_key_exists('enable_weighting', $data)) {
                $object->setEnableWeighting($data['enable_weighting']);
                unset($data['enable_weighting']);
            }
            if (\array_key_exists('weights', $data)) {
                $values_1 = [];
                foreach ($data['weights'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Krystal\\Katapult\\KatapultAPI\\Model\\LoadBalancerWeightsArguments', 'json', $context);
                }
                $object->setWeights($values_1);
                unset($data['weights']);
            }
            if (\array_key_exists('standby_vms', $data)) {
                $values_2 = [];
                foreach ($data['standby_vms'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setStandbyVms($values_2);
                unset($data['standby_vms']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('apiReference') && null !== $object->getApiReference()) {
                $data['api_reference'] = $object->getApiReference();
            }
            if ($object->isInitialized('resourceType') && null !== $object->getResourceType()) {
                $data['resource_type'] = $object->getResourceType();
            }
            if ($object->isInitialized('resourceIds') && null !== $object->getResourceIds()) {
                $values = [];
                foreach ($object->getResourceIds() as $value) {
                    $values[] = $value;
                }
                $data['resource_ids'] = $values;
            }
            if ($object->isInitialized('dataCenter') && null !== $object->getDataCenter()) {
                $data['data_center'] = $this->normalizer->normalize($object->getDataCenter(), 'json', $context);
            }
            if ($object->isInitialized('httpsRedirect') && null !== $object->getHttpsRedirect()) {
                $data['https_redirect'] = $object->getHttpsRedirect();
            }
            if ($object->isInitialized('enableWeighting') && null !== $object->getEnableWeighting()) {
                $data['enable_weighting'] = $object->getEnableWeighting();
            }
            if ($object->isInitialized('weights') && null !== $object->getWeights()) {
                $values_1 = [];
                foreach ($object->getWeights() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['weights'] = $values_1;
            }
            if ($object->isInitialized('standbyVms') && null !== $object->getStandbyVms()) {
                $values_2 = [];
                foreach ($object->getStandbyVms() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['standby_vms'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\LoadBalancerArguments' => false];
        }
    }
}
