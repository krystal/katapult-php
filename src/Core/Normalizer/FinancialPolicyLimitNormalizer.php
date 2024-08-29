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
    class FinancialPolicyLimitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'KatapultAPI\\Core\\Model\\FinancialPolicyLimit';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'KatapultAPI\\Core\\Model\\FinancialPolicyLimit';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\FinancialPolicyLimit();
            if (\array_key_exists('limit', $data) && \is_int($data['limit'])) {
                $data['limit'] = (float) $data['limit'];
            }
            if (\array_key_exists('current', $data) && \is_int($data['current'])) {
                $data['current'] = (float) $data['current'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            }
            if (\array_key_exists('current', $data)) {
                $object->setCurrent($data['current']);
                unset($data['current']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'KatapultAPI\\Core\\Model\\Currency', 'json', $context));
                unset($data['currency']);
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
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('current') && null !== $object->getCurrent()) {
                $data['current'] = $object->getCurrent();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
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
            return ['KatapultAPI\\Core\\Model\\FinancialPolicyLimit' => false];
        }
    }
} else {
    class FinancialPolicyLimitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'KatapultAPI\\Core\\Model\\FinancialPolicyLimit';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'KatapultAPI\\Core\\Model\\FinancialPolicyLimit';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\FinancialPolicyLimit();
            if (\array_key_exists('limit', $data) && \is_int($data['limit'])) {
                $data['limit'] = (float) $data['limit'];
            }
            if (\array_key_exists('current', $data) && \is_int($data['current'])) {
                $data['current'] = (float) $data['current'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            }
            if (\array_key_exists('current', $data)) {
                $object->setCurrent($data['current']);
                unset($data['current']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'KatapultAPI\\Core\\Model\\Currency', 'json', $context));
                unset($data['currency']);
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
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('current') && null !== $object->getCurrent()) {
                $data['current'] = $object->getCurrent();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
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
            return ['KatapultAPI\\Core\\Model\\FinancialPolicyLimit' => false];
        }
    }
}
