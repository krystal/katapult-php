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
    class CountryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'KatapultAPI\\Core\\Model\\Country';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'KatapultAPI\\Core\\Model\\Country';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\Country();
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
            if (\array_key_exists('iso_code2', $data)) {
                $object->setIsoCode2($data['iso_code2']);
                unset($data['iso_code2']);
            }
            if (\array_key_exists('iso_code3', $data)) {
                $object->setIsoCode3($data['iso_code3']);
                unset($data['iso_code3']);
            }
            if (\array_key_exists('time_zone', $data) && $data['time_zone'] !== null) {
                $object->setTimeZone($data['time_zone']);
                unset($data['time_zone']);
            } elseif (\array_key_exists('time_zone', $data) && $data['time_zone'] === null) {
                $object->setTimeZone(null);
            }
            if (\array_key_exists('eu', $data)) {
                $object->setEu($data['eu']);
                unset($data['eu']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('isoCode2') && null !== $object->getIsoCode2()) {
                $data['iso_code2'] = $object->getIsoCode2();
            }
            if ($object->isInitialized('isoCode3') && null !== $object->getIsoCode3()) {
                $data['iso_code3'] = $object->getIsoCode3();
            }
            if ($object->isInitialized('timeZone') && null !== $object->getTimeZone()) {
                $data['time_zone'] = $object->getTimeZone();
            }
            if ($object->isInitialized('eu') && null !== $object->getEu()) {
                $data['eu'] = $object->getEu();
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
            return ['KatapultAPI\\Core\\Model\\Country' => false];
        }
    }
} else {
    class CountryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'KatapultAPI\\Core\\Model\\Country';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'KatapultAPI\\Core\\Model\\Country';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\Country();
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
            if (\array_key_exists('iso_code2', $data)) {
                $object->setIsoCode2($data['iso_code2']);
                unset($data['iso_code2']);
            }
            if (\array_key_exists('iso_code3', $data)) {
                $object->setIsoCode3($data['iso_code3']);
                unset($data['iso_code3']);
            }
            if (\array_key_exists('time_zone', $data) && $data['time_zone'] !== null) {
                $object->setTimeZone($data['time_zone']);
                unset($data['time_zone']);
            } elseif (\array_key_exists('time_zone', $data) && $data['time_zone'] === null) {
                $object->setTimeZone(null);
            }
            if (\array_key_exists('eu', $data)) {
                $object->setEu($data['eu']);
                unset($data['eu']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('isoCode2') && null !== $object->getIsoCode2()) {
                $data['iso_code2'] = $object->getIsoCode2();
            }
            if ($object->isInitialized('isoCode3') && null !== $object->getIsoCode3()) {
                $data['iso_code3'] = $object->getIsoCode3();
            }
            if ($object->isInitialized('timeZone') && null !== $object->getTimeZone()) {
                $data['time_zone'] = $object->getTimeZone();
            }
            if ($object->isInitialized('eu') && null !== $object->getEu()) {
                $data['eu'] = $object->getEu();
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
            return ['KatapultAPI\\Core\\Model\\Country' => false];
        }
    }
}