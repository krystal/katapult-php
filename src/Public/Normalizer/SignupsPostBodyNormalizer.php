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
    class SignupsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'KatapultAPI\\Public\\Model\\SignupsPostBody';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'KatapultAPI\\Public\\Model\\SignupsPostBody';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Public\Model\SignupsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('email_address', $data)) {
                $object->setEmailAddress($data['email_address']);
                unset($data['email_address']);
            }
            if (\array_key_exists('coupon', $data)) {
                $object->setCoupon($data['coupon']);
                unset($data['coupon']);
            }
            if (\array_key_exists('campaign', $data)) {
                $object->setCampaign($this->denormalizer->denormalize($data['campaign'], 'KatapultAPI\\Public\\Model\\SignupCampaignArguments', 'json', $context));
                unset($data['campaign']);
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
            $data['email_address'] = $object->getEmailAddress();
            if ($object->isInitialized('coupon') && null !== $object->getCoupon()) {
                $data['coupon'] = $object->getCoupon();
            }
            if ($object->isInitialized('campaign') && null !== $object->getCampaign()) {
                $data['campaign'] = $this->normalizer->normalize($object->getCampaign(), 'json', $context);
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
            return ['KatapultAPI\\Public\\Model\\SignupsPostBody' => false];
        }
    }
} else {
    class SignupsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'KatapultAPI\\Public\\Model\\SignupsPostBody';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'KatapultAPI\\Public\\Model\\SignupsPostBody';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Public\Model\SignupsPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('email_address', $data)) {
                $object->setEmailAddress($data['email_address']);
                unset($data['email_address']);
            }
            if (\array_key_exists('coupon', $data)) {
                $object->setCoupon($data['coupon']);
                unset($data['coupon']);
            }
            if (\array_key_exists('campaign', $data)) {
                $object->setCampaign($this->denormalizer->denormalize($data['campaign'], 'KatapultAPI\\Public\\Model\\SignupCampaignArguments', 'json', $context));
                unset($data['campaign']);
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
            $data['email_address'] = $object->getEmailAddress();
            if ($object->isInitialized('coupon') && null !== $object->getCoupon()) {
                $data['coupon'] = $object->getCoupon();
            }
            if ($object->isInitialized('campaign') && null !== $object->getCampaign()) {
                $data['campaign'] = $this->normalizer->normalize($object->getCampaign(), 'json', $context);
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
            return ['KatapultAPI\\Public\\Model\\SignupsPostBody' => false];
        }
    }
}