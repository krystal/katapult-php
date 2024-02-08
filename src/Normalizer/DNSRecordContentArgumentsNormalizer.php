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

class DNSRecordContentArgumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArguments';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArguments';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\DNSRecordContentArguments();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('A', $data)) {
            $object->setA($this->denormalizer->denormalize($data['A'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForA', 'json', $context));
            unset($data['A']);
        }
        if (\array_key_exists('AAAA', $data)) {
            $object->setAAAA($this->denormalizer->denormalize($data['AAAA'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForAAAA', 'json', $context));
            unset($data['AAAA']);
        }
        if (\array_key_exists('ALIAS', $data)) {
            $object->setALIAS($this->denormalizer->denormalize($data['ALIAS'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForALIAS', 'json', $context));
            unset($data['ALIAS']);
        }
        if (\array_key_exists('CAA', $data)) {
            $object->setCAA($this->denormalizer->denormalize($data['CAA'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForCAA', 'json', $context));
            unset($data['CAA']);
        }
        if (\array_key_exists('CNAME', $data)) {
            $object->setCNAME($this->denormalizer->denormalize($data['CNAME'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForCNAME', 'json', $context));
            unset($data['CNAME']);
        }
        if (\array_key_exists('IPS', $data)) {
            $object->setIPS($this->denormalizer->denormalize($data['IPS'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForIPS', 'json', $context));
            unset($data['IPS']);
        }
        if (\array_key_exists('MX', $data)) {
            $object->setMX($this->denormalizer->denormalize($data['MX'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForMX', 'json', $context));
            unset($data['MX']);
        }
        if (\array_key_exists('NS', $data)) {
            $object->setNS($this->denormalizer->denormalize($data['NS'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForNS', 'json', $context));
            unset($data['NS']);
        }
        if (\array_key_exists('PTR', $data)) {
            $object->setPTR($this->denormalizer->denormalize($data['PTR'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForPTR', 'json', $context));
            unset($data['PTR']);
        }
        if (\array_key_exists('SOA', $data)) {
            $object->setSOA($data['SOA']);
            unset($data['SOA']);
        }
        if (\array_key_exists('SRV', $data)) {
            $object->setSRV($this->denormalizer->denormalize($data['SRV'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForSRV', 'json', $context));
            unset($data['SRV']);
        }
        if (\array_key_exists('SSHFP', $data)) {
            $object->setSSHFP($this->denormalizer->denormalize($data['SSHFP'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForSSHFP', 'json', $context));
            unset($data['SSHFP']);
        }
        if (\array_key_exists('TXT', $data)) {
            $object->setTXT($this->denormalizer->denormalize($data['TXT'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForTXT', 'json', $context));
            unset($data['TXT']);
        }
        if (\array_key_exists('VirtualMachine', $data)) {
            $object->setVirtualMachine($this->denormalizer->denormalize($data['VirtualMachine'], 'Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArgumentsForVirtualMachine', 'json', $context));
            unset($data['VirtualMachine']);
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
        if ($object->isInitialized('a') && null !== $object->getA()) {
            $data['A'] = $this->normalizer->normalize($object->getA(), 'json', $context);
        }
        if ($object->isInitialized('aAAA') && null !== $object->getAAAA()) {
            $data['AAAA'] = $this->normalizer->normalize($object->getAAAA(), 'json', $context);
        }
        if ($object->isInitialized('aLIAS') && null !== $object->getALIAS()) {
            $data['ALIAS'] = $this->normalizer->normalize($object->getALIAS(), 'json', $context);
        }
        if ($object->isInitialized('cAA') && null !== $object->getCAA()) {
            $data['CAA'] = $this->normalizer->normalize($object->getCAA(), 'json', $context);
        }
        if ($object->isInitialized('cNAME') && null !== $object->getCNAME()) {
            $data['CNAME'] = $this->normalizer->normalize($object->getCNAME(), 'json', $context);
        }
        if ($object->isInitialized('iPS') && null !== $object->getIPS()) {
            $data['IPS'] = $this->normalizer->normalize($object->getIPS(), 'json', $context);
        }
        if ($object->isInitialized('mX') && null !== $object->getMX()) {
            $data['MX'] = $this->normalizer->normalize($object->getMX(), 'json', $context);
        }
        if ($object->isInitialized('nS') && null !== $object->getNS()) {
            $data['NS'] = $this->normalizer->normalize($object->getNS(), 'json', $context);
        }
        if ($object->isInitialized('pTR') && null !== $object->getPTR()) {
            $data['PTR'] = $this->normalizer->normalize($object->getPTR(), 'json', $context);
        }
        if ($object->isInitialized('sOA') && null !== $object->getSOA()) {
            $data['SOA'] = $object->getSOA();
        }
        if ($object->isInitialized('sRV') && null !== $object->getSRV()) {
            $data['SRV'] = $this->normalizer->normalize($object->getSRV(), 'json', $context);
        }
        if ($object->isInitialized('sSHFP') && null !== $object->getSSHFP()) {
            $data['SSHFP'] = $this->normalizer->normalize($object->getSSHFP(), 'json', $context);
        }
        if ($object->isInitialized('tXT') && null !== $object->getTXT()) {
            $data['TXT'] = $this->normalizer->normalize($object->getTXT(), 'json', $context);
        }
        if ($object->isInitialized('virtualMachine') && null !== $object->getVirtualMachine()) {
            $data['VirtualMachine'] = $this->normalizer->normalize($object->getVirtualMachine(), 'json', $context);
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
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\DNSRecordContentArguments' => false];
    }
}
