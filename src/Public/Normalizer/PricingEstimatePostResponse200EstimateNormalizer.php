<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use KatapultAPI\Public\Runtime\Normalizer\CheckArray;
use KatapultAPI\Public\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class PricingEstimatePostResponse200EstimateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Public\Model\PricingEstimatePostResponse200Estimate::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Public\Model\PricingEstimatePostResponse200Estimate::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Public\Model\PricingEstimatePostResponse200Estimate();
            if (\array_key_exists('per_month', $data) && \is_int($data['per_month'])) {
                $data['per_month'] = (float) $data['per_month'];
            }
            if (\array_key_exists('per_month_inc_tax', $data) && \is_int($data['per_month_inc_tax'])) {
                $data['per_month_inc_tax'] = (float) $data['per_month_inc_tax'];
            }
            if (\array_key_exists('per_hour', $data) && \is_int($data['per_hour'])) {
                $data['per_hour'] = (float) $data['per_hour'];
            }
            if (\array_key_exists('per_hour_inc_tax', $data) && \is_int($data['per_hour_inc_tax'])) {
                $data['per_hour_inc_tax'] = (float) $data['per_hour_inc_tax'];
            }
            if (\array_key_exists('tax_rate', $data) && \is_int($data['tax_rate'])) {
                $data['tax_rate'] = (float) $data['tax_rate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('resources', $data)) {
                $values = [];
                foreach ($data['resources'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \KatapultAPI\Public\Model\PricingEstimateResource::class, 'json', $context);
                }
                $object->setResources($values);
                unset($data['resources']);
            }
            if (\array_key_exists('per_month', $data)) {
                $object->setPerMonth($data['per_month']);
                unset($data['per_month']);
            }
            if (\array_key_exists('per_month_inc_tax', $data)) {
                $object->setPerMonthIncTax($data['per_month_inc_tax']);
                unset($data['per_month_inc_tax']);
            }
            if (\array_key_exists('per_hour', $data)) {
                $object->setPerHour($data['per_hour']);
                unset($data['per_hour']);
            }
            if (\array_key_exists('per_hour_inc_tax', $data)) {
                $object->setPerHourIncTax($data['per_hour_inc_tax']);
                unset($data['per_hour_inc_tax']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($this->denormalizer->denormalize($data['currency'], \KatapultAPI\Public\Model\Currency::class, 'json', $context));
                unset($data['currency']);
            }
            if (\array_key_exists('tax_rate', $data)) {
                $object->setTaxRate($data['tax_rate']);
                unset($data['tax_rate']);
            }
            if (\array_key_exists('pdf_url', $data)) {
                $object->setPdfUrl($data['pdf_url']);
                unset($data['pdf_url']);
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
            if ($object->isInitialized('resources') && null !== $object->getResources()) {
                $values = [];
                foreach ($object->getResources() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['resources'] = $values;
            }
            if ($object->isInitialized('perMonth') && null !== $object->getPerMonth()) {
                $data['per_month'] = $object->getPerMonth();
            }
            if ($object->isInitialized('perMonthIncTax') && null !== $object->getPerMonthIncTax()) {
                $data['per_month_inc_tax'] = $object->getPerMonthIncTax();
            }
            if ($object->isInitialized('perHour') && null !== $object->getPerHour()) {
                $data['per_hour'] = $object->getPerHour();
            }
            if ($object->isInitialized('perHourIncTax') && null !== $object->getPerHourIncTax()) {
                $data['per_hour_inc_tax'] = $object->getPerHourIncTax();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
            }
            if ($object->isInitialized('taxRate') && null !== $object->getTaxRate()) {
                $data['tax_rate'] = $object->getTaxRate();
            }
            if ($object->isInitialized('pdfUrl') && null !== $object->getPdfUrl()) {
                $data['pdf_url'] = $object->getPdfUrl();
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
            return [\KatapultAPI\Public\Model\PricingEstimatePostResponse200Estimate::class => false];
        }
    }
} else {
    class PricingEstimatePostResponse200EstimateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Public\Model\PricingEstimatePostResponse200Estimate::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Public\Model\PricingEstimatePostResponse200Estimate::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Public\Model\PricingEstimatePostResponse200Estimate();
            if (\array_key_exists('per_month', $data) && \is_int($data['per_month'])) {
                $data['per_month'] = (float) $data['per_month'];
            }
            if (\array_key_exists('per_month_inc_tax', $data) && \is_int($data['per_month_inc_tax'])) {
                $data['per_month_inc_tax'] = (float) $data['per_month_inc_tax'];
            }
            if (\array_key_exists('per_hour', $data) && \is_int($data['per_hour'])) {
                $data['per_hour'] = (float) $data['per_hour'];
            }
            if (\array_key_exists('per_hour_inc_tax', $data) && \is_int($data['per_hour_inc_tax'])) {
                $data['per_hour_inc_tax'] = (float) $data['per_hour_inc_tax'];
            }
            if (\array_key_exists('tax_rate', $data) && \is_int($data['tax_rate'])) {
                $data['tax_rate'] = (float) $data['tax_rate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('resources', $data)) {
                $values = [];
                foreach ($data['resources'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \KatapultAPI\Public\Model\PricingEstimateResource::class, 'json', $context);
                }
                $object->setResources($values);
                unset($data['resources']);
            }
            if (\array_key_exists('per_month', $data)) {
                $object->setPerMonth($data['per_month']);
                unset($data['per_month']);
            }
            if (\array_key_exists('per_month_inc_tax', $data)) {
                $object->setPerMonthIncTax($data['per_month_inc_tax']);
                unset($data['per_month_inc_tax']);
            }
            if (\array_key_exists('per_hour', $data)) {
                $object->setPerHour($data['per_hour']);
                unset($data['per_hour']);
            }
            if (\array_key_exists('per_hour_inc_tax', $data)) {
                $object->setPerHourIncTax($data['per_hour_inc_tax']);
                unset($data['per_hour_inc_tax']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($this->denormalizer->denormalize($data['currency'], \KatapultAPI\Public\Model\Currency::class, 'json', $context));
                unset($data['currency']);
            }
            if (\array_key_exists('tax_rate', $data)) {
                $object->setTaxRate($data['tax_rate']);
                unset($data['tax_rate']);
            }
            if (\array_key_exists('pdf_url', $data)) {
                $object->setPdfUrl($data['pdf_url']);
                unset($data['pdf_url']);
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
            if ($object->isInitialized('resources') && null !== $object->getResources()) {
                $values = [];
                foreach ($object->getResources() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['resources'] = $values;
            }
            if ($object->isInitialized('perMonth') && null !== $object->getPerMonth()) {
                $data['per_month'] = $object->getPerMonth();
            }
            if ($object->isInitialized('perMonthIncTax') && null !== $object->getPerMonthIncTax()) {
                $data['per_month_inc_tax'] = $object->getPerMonthIncTax();
            }
            if ($object->isInitialized('perHour') && null !== $object->getPerHour()) {
                $data['per_hour'] = $object->getPerHour();
            }
            if ($object->isInitialized('perHourIncTax') && null !== $object->getPerHourIncTax()) {
                $data['per_hour_inc_tax'] = $object->getPerHourIncTax();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
            }
            if ($object->isInitialized('taxRate') && null !== $object->getTaxRate()) {
                $data['tax_rate'] = $object->getTaxRate();
            }
            if ($object->isInitialized('pdfUrl') && null !== $object->getPdfUrl()) {
                $data['pdf_url'] = $object->getPdfUrl();
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
            return [\KatapultAPI\Public\Model\PricingEstimatePostResponse200Estimate::class => false];
        }
    }
}
