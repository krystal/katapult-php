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
    class OrganizationsOrganizationIpAddressesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'KatapultAPI\\Core\\Model\\OrganizationsOrganizationIpAddressesPostBody';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'KatapultAPI\\Core\\Model\\OrganizationsOrganizationIpAddressesPostBody';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\OrganizationsOrganizationIpAddressesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('organization', $data)) {
                $object->setOrganization($this->denormalizer->denormalize($data['organization'], 'KatapultAPI\\Core\\Model\\OrganizationLookup', 'json', $context));
                unset($data['organization']);
            }
            if (\array_key_exists('network', $data)) {
                $object->setNetwork($this->denormalizer->denormalize($data['network'], 'KatapultAPI\\Core\\Model\\NetworkLookup', 'json', $context));
                unset($data['network']);
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
            }
            if (\array_key_exists('vip', $data)) {
                $object->setVip($data['vip']);
                unset($data['vip']);
            }
            if (\array_key_exists('label', $data)) {
                $object->setLabel($data['label']);
                unset($data['label']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
            $data['network'] = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
            $data['version'] = $object->getVersion();
            if ($object->isInitialized('vip') && null !== $object->getVip()) {
                $data['vip'] = $object->getVip();
            }
            if ($object->isInitialized('label') && null !== $object->getLabel()) {
                $data['label'] = $object->getLabel();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['KatapultAPI\\Core\\Model\\OrganizationsOrganizationIpAddressesPostBody' => false];
        }
    }
} else {
    class OrganizationsOrganizationIpAddressesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'KatapultAPI\\Core\\Model\\OrganizationsOrganizationIpAddressesPostBody';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'KatapultAPI\\Core\\Model\\OrganizationsOrganizationIpAddressesPostBody';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\OrganizationsOrganizationIpAddressesPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('organization', $data)) {
                $object->setOrganization($this->denormalizer->denormalize($data['organization'], 'KatapultAPI\\Core\\Model\\OrganizationLookup', 'json', $context));
                unset($data['organization']);
            }
            if (\array_key_exists('network', $data)) {
                $object->setNetwork($this->denormalizer->denormalize($data['network'], 'KatapultAPI\\Core\\Model\\NetworkLookup', 'json', $context));
                unset($data['network']);
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
            }
            if (\array_key_exists('vip', $data)) {
                $object->setVip($data['vip']);
                unset($data['vip']);
            }
            if (\array_key_exists('label', $data)) {
                $object->setLabel($data['label']);
                unset($data['label']);
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
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
            $data['network'] = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
            $data['version'] = $object->getVersion();
            if ($object->isInitialized('vip') && null !== $object->getVip()) {
                $data['vip'] = $object->getVip();
            }
            if ($object->isInitialized('label') && null !== $object->getLabel()) {
                $data['label'] = $object->getLabel();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['KatapultAPI\\Core\\Model\\OrganizationsOrganizationIpAddressesPostBody' => false];
        }
    }
}