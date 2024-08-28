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
    class OrganizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\Organization';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\Organization';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\Organization();
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
            if (\array_key_exists('sub_domain', $data)) {
                $object->setSubDomain($data['sub_domain']);
                unset($data['sub_domain']);
            }
            if (\array_key_exists('infrastructure_domain', $data)) {
                $object->setInfrastructureDomain($data['infrastructure_domain']);
                unset($data['infrastructure_domain']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('activated_at', $data) && $data['activated_at'] !== null) {
                $object->setActivatedAt($data['activated_at']);
                unset($data['activated_at']);
            } elseif (\array_key_exists('activated_at', $data) && $data['activated_at'] === null) {
                $object->setActivatedAt(null);
            }
            if (\array_key_exists('suspended', $data)) {
                $object->setSuspended($data['suspended']);
                unset($data['suspended']);
            }
            if (\array_key_exists('managed', $data)) {
                $object->setManaged($data['managed']);
                unset($data['managed']);
            }
            if (\array_key_exists('billing_name', $data) && $data['billing_name'] !== null) {
                $object->setBillingName($data['billing_name']);
                unset($data['billing_name']);
            } elseif (\array_key_exists('billing_name', $data) && $data['billing_name'] === null) {
                $object->setBillingName(null);
            }
            if (\array_key_exists('address1', $data) && $data['address1'] !== null) {
                $object->setAddress1($data['address1']);
                unset($data['address1']);
            } elseif (\array_key_exists('address1', $data) && $data['address1'] === null) {
                $object->setAddress1(null);
            }
            if (\array_key_exists('address2', $data) && $data['address2'] !== null) {
                $object->setAddress2($data['address2']);
                unset($data['address2']);
            } elseif (\array_key_exists('address2', $data) && $data['address2'] === null) {
                $object->setAddress2(null);
            }
            if (\array_key_exists('address3', $data) && $data['address3'] !== null) {
                $object->setAddress3($data['address3']);
                unset($data['address3']);
            } elseif (\array_key_exists('address3', $data) && $data['address3'] === null) {
                $object->setAddress3(null);
            }
            if (\array_key_exists('address4', $data) && $data['address4'] !== null) {
                $object->setAddress4($data['address4']);
                unset($data['address4']);
            } elseif (\array_key_exists('address4', $data) && $data['address4'] === null) {
                $object->setAddress4(null);
            }
            if (\array_key_exists('postcode', $data) && $data['postcode'] !== null) {
                $object->setPostcode($data['postcode']);
                unset($data['postcode']);
            } elseif (\array_key_exists('postcode', $data) && $data['postcode'] === null) {
                $object->setPostcode(null);
            }
            if (\array_key_exists('vat_number', $data) && $data['vat_number'] !== null) {
                $object->setVatNumber($data['vat_number']);
                unset($data['vat_number']);
            } elseif (\array_key_exists('vat_number', $data) && $data['vat_number'] === null) {
                $object->setVatNumber(null);
            }
            if (\array_key_exists('phone_number', $data) && $data['phone_number'] !== null) {
                $object->setPhoneNumber($data['phone_number']);
                unset($data['phone_number']);
            } elseif (\array_key_exists('phone_number', $data) && $data['phone_number'] === null) {
                $object->setPhoneNumber(null);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'Krystal\\Katapult\\KatapultAPI\\Model\\Currency', 'json', $context));
                unset($data['currency']);
            }
            if (\array_key_exists('country', $data) && $data['country'] !== null) {
                $object->setCountry($this->denormalizer->denormalize($data['country'], 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationCountry', 'json', $context));
                unset($data['country']);
            } elseif (\array_key_exists('country', $data) && $data['country'] === null) {
                $object->setCountry(null);
            }
            if (\array_key_exists('country_state', $data) && $data['country_state'] !== null) {
                $object->setCountryState($this->denormalizer->denormalize($data['country_state'], 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationCountryState', 'json', $context));
                unset($data['country_state']);
            } elseif (\array_key_exists('country_state', $data) && $data['country_state'] === null) {
                $object->setCountryState(null);
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
            if ($object->isInitialized('subDomain') && null !== $object->getSubDomain()) {
                $data['sub_domain'] = $object->getSubDomain();
            }
            if ($object->isInitialized('infrastructureDomain') && null !== $object->getInfrastructureDomain()) {
                $data['infrastructure_domain'] = $object->getInfrastructureDomain();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('activatedAt') && null !== $object->getActivatedAt()) {
                $data['activated_at'] = $object->getActivatedAt();
            }
            if ($object->isInitialized('suspended') && null !== $object->getSuspended()) {
                $data['suspended'] = $object->getSuspended();
            }
            if ($object->isInitialized('managed') && null !== $object->getManaged()) {
                $data['managed'] = $object->getManaged();
            }
            if ($object->isInitialized('billingName') && null !== $object->getBillingName()) {
                $data['billing_name'] = $object->getBillingName();
            }
            if ($object->isInitialized('address1') && null !== $object->getAddress1()) {
                $data['address1'] = $object->getAddress1();
            }
            if ($object->isInitialized('address2') && null !== $object->getAddress2()) {
                $data['address2'] = $object->getAddress2();
            }
            if ($object->isInitialized('address3') && null !== $object->getAddress3()) {
                $data['address3'] = $object->getAddress3();
            }
            if ($object->isInitialized('address4') && null !== $object->getAddress4()) {
                $data['address4'] = $object->getAddress4();
            }
            if ($object->isInitialized('postcode') && null !== $object->getPostcode()) {
                $data['postcode'] = $object->getPostcode();
            }
            if ($object->isInitialized('vatNumber') && null !== $object->getVatNumber()) {
                $data['vat_number'] = $object->getVatNumber();
            }
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['phone_number'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $this->normalizer->normalize($object->getCountry(), 'json', $context);
            }
            if ($object->isInitialized('countryState') && null !== $object->getCountryState()) {
                $data['country_state'] = $this->normalizer->normalize($object->getCountryState(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\Organization' => false];
        }
    }
} else {
    class OrganizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\Organization';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\Organization';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Krystal\Katapult\KatapultAPI\Model\Organization();
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
            if (\array_key_exists('sub_domain', $data)) {
                $object->setSubDomain($data['sub_domain']);
                unset($data['sub_domain']);
            }
            if (\array_key_exists('infrastructure_domain', $data)) {
                $object->setInfrastructureDomain($data['infrastructure_domain']);
                unset($data['infrastructure_domain']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('activated_at', $data) && $data['activated_at'] !== null) {
                $object->setActivatedAt($data['activated_at']);
                unset($data['activated_at']);
            } elseif (\array_key_exists('activated_at', $data) && $data['activated_at'] === null) {
                $object->setActivatedAt(null);
            }
            if (\array_key_exists('suspended', $data)) {
                $object->setSuspended($data['suspended']);
                unset($data['suspended']);
            }
            if (\array_key_exists('managed', $data)) {
                $object->setManaged($data['managed']);
                unset($data['managed']);
            }
            if (\array_key_exists('billing_name', $data) && $data['billing_name'] !== null) {
                $object->setBillingName($data['billing_name']);
                unset($data['billing_name']);
            } elseif (\array_key_exists('billing_name', $data) && $data['billing_name'] === null) {
                $object->setBillingName(null);
            }
            if (\array_key_exists('address1', $data) && $data['address1'] !== null) {
                $object->setAddress1($data['address1']);
                unset($data['address1']);
            } elseif (\array_key_exists('address1', $data) && $data['address1'] === null) {
                $object->setAddress1(null);
            }
            if (\array_key_exists('address2', $data) && $data['address2'] !== null) {
                $object->setAddress2($data['address2']);
                unset($data['address2']);
            } elseif (\array_key_exists('address2', $data) && $data['address2'] === null) {
                $object->setAddress2(null);
            }
            if (\array_key_exists('address3', $data) && $data['address3'] !== null) {
                $object->setAddress3($data['address3']);
                unset($data['address3']);
            } elseif (\array_key_exists('address3', $data) && $data['address3'] === null) {
                $object->setAddress3(null);
            }
            if (\array_key_exists('address4', $data) && $data['address4'] !== null) {
                $object->setAddress4($data['address4']);
                unset($data['address4']);
            } elseif (\array_key_exists('address4', $data) && $data['address4'] === null) {
                $object->setAddress4(null);
            }
            if (\array_key_exists('postcode', $data) && $data['postcode'] !== null) {
                $object->setPostcode($data['postcode']);
                unset($data['postcode']);
            } elseif (\array_key_exists('postcode', $data) && $data['postcode'] === null) {
                $object->setPostcode(null);
            }
            if (\array_key_exists('vat_number', $data) && $data['vat_number'] !== null) {
                $object->setVatNumber($data['vat_number']);
                unset($data['vat_number']);
            } elseif (\array_key_exists('vat_number', $data) && $data['vat_number'] === null) {
                $object->setVatNumber(null);
            }
            if (\array_key_exists('phone_number', $data) && $data['phone_number'] !== null) {
                $object->setPhoneNumber($data['phone_number']);
                unset($data['phone_number']);
            } elseif (\array_key_exists('phone_number', $data) && $data['phone_number'] === null) {
                $object->setPhoneNumber(null);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'Krystal\\Katapult\\KatapultAPI\\Model\\Currency', 'json', $context));
                unset($data['currency']);
            }
            if (\array_key_exists('country', $data) && $data['country'] !== null) {
                $object->setCountry($this->denormalizer->denormalize($data['country'], 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationCountry', 'json', $context));
                unset($data['country']);
            } elseif (\array_key_exists('country', $data) && $data['country'] === null) {
                $object->setCountry(null);
            }
            if (\array_key_exists('country_state', $data) && $data['country_state'] !== null) {
                $object->setCountryState($this->denormalizer->denormalize($data['country_state'], 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationCountryState', 'json', $context));
                unset($data['country_state']);
            } elseif (\array_key_exists('country_state', $data) && $data['country_state'] === null) {
                $object->setCountryState(null);
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
            if ($object->isInitialized('subDomain') && null !== $object->getSubDomain()) {
                $data['sub_domain'] = $object->getSubDomain();
            }
            if ($object->isInitialized('infrastructureDomain') && null !== $object->getInfrastructureDomain()) {
                $data['infrastructure_domain'] = $object->getInfrastructureDomain();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('activatedAt') && null !== $object->getActivatedAt()) {
                $data['activated_at'] = $object->getActivatedAt();
            }
            if ($object->isInitialized('suspended') && null !== $object->getSuspended()) {
                $data['suspended'] = $object->getSuspended();
            }
            if ($object->isInitialized('managed') && null !== $object->getManaged()) {
                $data['managed'] = $object->getManaged();
            }
            if ($object->isInitialized('billingName') && null !== $object->getBillingName()) {
                $data['billing_name'] = $object->getBillingName();
            }
            if ($object->isInitialized('address1') && null !== $object->getAddress1()) {
                $data['address1'] = $object->getAddress1();
            }
            if ($object->isInitialized('address2') && null !== $object->getAddress2()) {
                $data['address2'] = $object->getAddress2();
            }
            if ($object->isInitialized('address3') && null !== $object->getAddress3()) {
                $data['address3'] = $object->getAddress3();
            }
            if ($object->isInitialized('address4') && null !== $object->getAddress4()) {
                $data['address4'] = $object->getAddress4();
            }
            if ($object->isInitialized('postcode') && null !== $object->getPostcode()) {
                $data['postcode'] = $object->getPostcode();
            }
            if ($object->isInitialized('vatNumber') && null !== $object->getVatNumber()) {
                $data['vat_number'] = $object->getVatNumber();
            }
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['phone_number'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $this->normalizer->normalize($object->getCountry(), 'json', $context);
            }
            if ($object->isInitialized('countryState') && null !== $object->getCountryState()) {
                $data['country_state'] = $this->normalizer->normalize($object->getCountryState(), 'json', $context);
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
            return ['Krystal\\Katapult\\KatapultAPI\\Model\\Organization' => false];
        }
    }
}
