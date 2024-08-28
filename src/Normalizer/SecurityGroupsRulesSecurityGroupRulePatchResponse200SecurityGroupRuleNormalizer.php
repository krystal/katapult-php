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
    class SecurityGroupsRulesSecurityGroupRulePatchResponse200SecurityGroupRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\SecurityGroupsRulesSecurityGroupRulePatchResponse200SecurityGroupRule';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\SecurityGroupsRulesSecurityGroupRulePatchResponse200SecurityGroupRule';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\SecurityGroupsRulesSecurityGroupRulePatchResponse200SecurityGroupRule();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('security_group', $data)) {
                $object->setSecurityGroup($this->denormalizer->denormalize($data['security_group'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PatchSecurityGroupsRulesSecurityGroupRulePartSecurityGroup', 'json', $context));
                unset($data['security_group']);
            }
            if (\array_key_exists('direction', $data)) {
                $object->setDirection($data['direction']);
                unset($data['direction']);
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
                unset($data['protocol']);
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($data['action']);
                unset($data['action']);
            }
            if (\array_key_exists('ports', $data) && $data['ports'] !== null) {
                $object->setPorts($data['ports']);
                unset($data['ports']);
            } elseif (\array_key_exists('ports', $data) && $data['ports'] === null) {
                $object->setPorts(null);
            }
            if (\array_key_exists('targets', $data)) {
                $values = [];
                foreach ($data['targets'] as $value) {
                    $values[] = $value;
                }
                $object->setTargets($values);
                unset($data['targets']);
            }
            if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
                $object->setNotes($data['notes']);
                unset($data['notes']);
            } elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
                $object->setNotes(null);
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
            if ($object->isInitialized('securityGroup') && null !== $object->getSecurityGroup()) {
                $data['security_group'] = $this->normalizer->normalize($object->getSecurityGroup(), 'json', $context);
            }
            if ($object->isInitialized('direction') && null !== $object->getDirection()) {
                $data['direction'] = $object->getDirection();
            }
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('action') && null !== $object->getAction()) {
                $data['action'] = $object->getAction();
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $data['ports'] = $object->getPorts();
            }
            if ($object->isInitialized('targets') && null !== $object->getTargets()) {
                $values = [];
                foreach ($object->getTargets() as $value) {
                    $values[] = $value;
                }
                $data['targets'] = $values;
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\SecurityGroupsRulesSecurityGroupRulePatchResponse200SecurityGroupRule' => false];
        }
    }
} else {
    class SecurityGroupsRulesSecurityGroupRulePatchResponse200SecurityGroupRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\SecurityGroupsRulesSecurityGroupRulePatchResponse200SecurityGroupRule';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\SecurityGroupsRulesSecurityGroupRulePatchResponse200SecurityGroupRule';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\SecurityGroupsRulesSecurityGroupRulePatchResponse200SecurityGroupRule();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('security_group', $data)) {
                $object->setSecurityGroup($this->denormalizer->denormalize($data['security_group'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PatchSecurityGroupsRulesSecurityGroupRulePartSecurityGroup', 'json', $context));
                unset($data['security_group']);
            }
            if (\array_key_exists('direction', $data)) {
                $object->setDirection($data['direction']);
                unset($data['direction']);
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
                unset($data['protocol']);
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($data['action']);
                unset($data['action']);
            }
            if (\array_key_exists('ports', $data) && $data['ports'] !== null) {
                $object->setPorts($data['ports']);
                unset($data['ports']);
            } elseif (\array_key_exists('ports', $data) && $data['ports'] === null) {
                $object->setPorts(null);
            }
            if (\array_key_exists('targets', $data)) {
                $values = [];
                foreach ($data['targets'] as $value) {
                    $values[] = $value;
                }
                $object->setTargets($values);
                unset($data['targets']);
            }
            if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
                $object->setNotes($data['notes']);
                unset($data['notes']);
            } elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
                $object->setNotes(null);
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
            if ($object->isInitialized('securityGroup') && null !== $object->getSecurityGroup()) {
                $data['security_group'] = $this->normalizer->normalize($object->getSecurityGroup(), 'json', $context);
            }
            if ($object->isInitialized('direction') && null !== $object->getDirection()) {
                $data['direction'] = $object->getDirection();
            }
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('action') && null !== $object->getAction()) {
                $data['action'] = $object->getAction();
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $data['ports'] = $object->getPorts();
            }
            if ($object->isInitialized('targets') && null !== $object->getTargets()) {
                $values = [];
                foreach ($object->getTargets() as $value) {
                    $values[] = $value;
                }
                $data['targets'] = $values;
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\SecurityGroupsRulesSecurityGroupRulePatchResponse200SecurityGroupRule' => false];
        }
    }
}
