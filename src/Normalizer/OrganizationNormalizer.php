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

class OrganizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\Organization';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\Organization';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
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
        if (\array_key_exists('suspended', $data)) {
            $object->setSuspended($data['suspended']);
            unset($data['suspended']);
        }
        if (\array_key_exists('managed', $data)) {
            $object->setManaged($data['managed']);
            unset($data['managed']);
        }
        if (\array_key_exists('billing_name', $data)) {
            $object->setBillingName($data['billing_name']);
            unset($data['billing_name']);
        }
        if (\array_key_exists('address1', $data)) {
            $object->setAddress1($data['address1']);
            unset($data['address1']);
        }
        if (\array_key_exists('address2', $data)) {
            $object->setAddress2($data['address2']);
            unset($data['address2']);
        }
        if (\array_key_exists('address3', $data)) {
            $object->setAddress3($data['address3']);
            unset($data['address3']);
        }
        if (\array_key_exists('address4', $data)) {
            $object->setAddress4($data['address4']);
            unset($data['address4']);
        }
        if (\array_key_exists('postcode', $data)) {
            $object->setPostcode($data['postcode']);
            unset($data['postcode']);
        }
        if (\array_key_exists('vat_number', $data)) {
            $object->setVatNumber($data['vat_number']);
            unset($data['vat_number']);
        }
        if (\array_key_exists('phone_number', $data)) {
            $object->setPhoneNumber($data['phone_number']);
            unset($data['phone_number']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'Krystal\\Katapult\\KatapultAPI\\Model\\Currency', 'json', $context));
            unset($data['currency']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($this->denormalizer->denormalize($data['country'], 'Krystal\\Katapult\\KatapultAPI\\Model\\Country', 'json', $context));
            unset($data['country']);
        }
        if (\array_key_exists('country_state', $data)) {
            $object->setCountryState($this->denormalizer->denormalize($data['country_state'], 'Krystal\\Katapult\\KatapultAPI\\Model\\CountryState', 'json', $context));
            unset($data['country_state']);
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

    public function getSupportedTypes(string $format = null): array
    {
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\Organization' => false];
    }
}
