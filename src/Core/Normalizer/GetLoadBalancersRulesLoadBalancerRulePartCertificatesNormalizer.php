<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use KatapultAPI\Core\Runtime\Normalizer\CheckArray;
use KatapultAPI\Core\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GetLoadBalancersRulesLoadBalancerRulePartCertificatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\GetLoadBalancersRulesLoadBalancerRulePartCertificates::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\GetLoadBalancersRulesLoadBalancerRulePartCertificates::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\GetLoadBalancersRulesLoadBalancerRulePartCertificates();
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
            if (\array_key_exists('additional_names', $data)) {
                $values = [];
                foreach ($data['additional_names'] as $value) {
                    $values[] = $value;
                }
                $object->setAdditionalNames($values);
                unset($data['additional_names']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('additionalNames') && null !== $object->getAdditionalNames()) {
                $values = [];
                foreach ($object->getAdditionalNames() as $value) {
                    $values[] = $value;
                }
                $data['additional_names'] = $values;
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\KatapultAPI\Core\Model\GetLoadBalancersRulesLoadBalancerRulePartCertificates::class => false];
        }
    }
} else {
    class GetLoadBalancersRulesLoadBalancerRulePartCertificatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\GetLoadBalancersRulesLoadBalancerRulePartCertificates::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\GetLoadBalancersRulesLoadBalancerRulePartCertificates::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\GetLoadBalancersRulesLoadBalancerRulePartCertificates();
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
            if (\array_key_exists('additional_names', $data)) {
                $values = [];
                foreach ($data['additional_names'] as $value) {
                    $values[] = $value;
                }
                $object->setAdditionalNames($values);
                unset($data['additional_names']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
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
            if ($object->isInitialized('additionalNames') && null !== $object->getAdditionalNames()) {
                $values = [];
                foreach ($object->getAdditionalNames() as $value) {
                    $values[] = $value;
                }
                $data['additional_names'] = $values;
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\KatapultAPI\Core\Model\GetLoadBalancersRulesLoadBalancerRulePartCertificates::class => false];
        }
    }
}
