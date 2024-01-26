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

class PatchLoadBalancersRulesLoadBalancerRule200ResponseLoadBalancerRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Krystal\\Katapult\\KatapultAPI\\Model\\PatchLoadBalancersRulesLoadBalancerRule200ResponseLoadBalancerRule';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Krystal\\Katapult\\KatapultAPI\\Model\\PatchLoadBalancersRulesLoadBalancerRule200ResponseLoadBalancerRule';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Krystal\Katapult\KatapultAPI\Model\PatchLoadBalancersRulesLoadBalancerRule200ResponseLoadBalancerRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('algorithm', $data)) {
            $object->setAlgorithm($data['algorithm']);
            unset($data['algorithm']);
        }
        if (\array_key_exists('destination_port', $data)) {
            $object->setDestinationPort($data['destination_port']);
            unset($data['destination_port']);
        }
        if (\array_key_exists('listen_port', $data)) {
            $object->setListenPort($data['listen_port']);
            unset($data['listen_port']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
            unset($data['protocol']);
        }
        if (\array_key_exists('proxy_protocol', $data)) {
            $object->setProxyProtocol($data['proxy_protocol']);
            unset($data['proxy_protocol']);
        }
        if (\array_key_exists('certificates', $data)) {
            $values = [];
            foreach ($data['certificates'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Krystal\\Katapult\\KatapultAPI\\Model\\PatchLoadBalancersRulesLoadBalancerRule200ResponseLoadBalancerRuleCertificatesItem', 'json', $context);
            }
            $object->setCertificates($values);
            unset($data['certificates']);
        }
        if (\array_key_exists('backend_ssl', $data)) {
            $object->setBackendSsl($data['backend_ssl']);
            unset($data['backend_ssl']);
        }
        if (\array_key_exists('passthrough_ssl', $data)) {
            $object->setPassthroughSsl($data['passthrough_ssl']);
            unset($data['passthrough_ssl']);
        }
        if (\array_key_exists('check_enabled', $data)) {
            $object->setCheckEnabled($data['check_enabled']);
            unset($data['check_enabled']);
        }
        if (\array_key_exists('check_fall', $data)) {
            $object->setCheckFall($data['check_fall']);
            unset($data['check_fall']);
        }
        if (\array_key_exists('check_interval', $data)) {
            $object->setCheckInterval($data['check_interval']);
            unset($data['check_interval']);
        }
        if (\array_key_exists('check_path', $data)) {
            $object->setCheckPath($data['check_path']);
            unset($data['check_path']);
        }
        if (\array_key_exists('check_protocol', $data)) {
            $object->setCheckProtocol($data['check_protocol']);
            unset($data['check_protocol']);
        }
        if (\array_key_exists('check_rise', $data)) {
            $object->setCheckRise($data['check_rise']);
            unset($data['check_rise']);
        }
        if (\array_key_exists('check_timeout', $data)) {
            $object->setCheckTimeout($data['check_timeout']);
            unset($data['check_timeout']);
        }
        if (\array_key_exists('check_http_statuses', $data)) {
            $object->setCheckHttpStatuses($data['check_http_statuses']);
            unset($data['check_http_statuses']);
        }
        if (\array_key_exists('load_balancer', $data)) {
            $object->setLoadBalancer($this->denormalizer->denormalize($data['load_balancer'], 'Krystal\\Katapult\\KatapultAPI\\Model\\PatchLoadBalancersRulesLoadBalancerRule200ResponseLoadBalancerRuleLoadBalancer', 'json', $context));
            unset($data['load_balancer']);
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
        if ($object->isInitialized('algorithm') && null !== $object->getAlgorithm()) {
            $data['algorithm'] = $object->getAlgorithm();
        }
        if ($object->isInitialized('destinationPort') && null !== $object->getDestinationPort()) {
            $data['destination_port'] = $object->getDestinationPort();
        }
        if ($object->isInitialized('listenPort') && null !== $object->getListenPort()) {
            $data['listen_port'] = $object->getListenPort();
        }
        if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
            $data['protocol'] = $object->getProtocol();
        }
        if ($object->isInitialized('proxyProtocol') && null !== $object->getProxyProtocol()) {
            $data['proxy_protocol'] = $object->getProxyProtocol();
        }
        if ($object->isInitialized('certificates') && null !== $object->getCertificates()) {
            $values = [];
            foreach ($object->getCertificates() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['certificates'] = $values;
        }
        if ($object->isInitialized('backendSsl') && null !== $object->getBackendSsl()) {
            $data['backend_ssl'] = $object->getBackendSsl();
        }
        if ($object->isInitialized('passthroughSsl') && null !== $object->getPassthroughSsl()) {
            $data['passthrough_ssl'] = $object->getPassthroughSsl();
        }
        if ($object->isInitialized('checkEnabled') && null !== $object->getCheckEnabled()) {
            $data['check_enabled'] = $object->getCheckEnabled();
        }
        if ($object->isInitialized('checkFall') && null !== $object->getCheckFall()) {
            $data['check_fall'] = $object->getCheckFall();
        }
        if ($object->isInitialized('checkInterval') && null !== $object->getCheckInterval()) {
            $data['check_interval'] = $object->getCheckInterval();
        }
        if ($object->isInitialized('checkPath') && null !== $object->getCheckPath()) {
            $data['check_path'] = $object->getCheckPath();
        }
        if ($object->isInitialized('checkProtocol') && null !== $object->getCheckProtocol()) {
            $data['check_protocol'] = $object->getCheckProtocol();
        }
        if ($object->isInitialized('checkRise') && null !== $object->getCheckRise()) {
            $data['check_rise'] = $object->getCheckRise();
        }
        if ($object->isInitialized('checkTimeout') && null !== $object->getCheckTimeout()) {
            $data['check_timeout'] = $object->getCheckTimeout();
        }
        if ($object->isInitialized('checkHttpStatuses') && null !== $object->getCheckHttpStatuses()) {
            $data['check_http_statuses'] = $object->getCheckHttpStatuses();
        }
        if ($object->isInitialized('loadBalancer') && null !== $object->getLoadBalancer()) {
            $data['load_balancer'] = $this->normalizer->normalize($object->getLoadBalancer(), 'json', $context);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Krystal\\Katapult\\KatapultAPI\\Model\\PatchLoadBalancersRulesLoadBalancerRule200ResponseLoadBalancerRule' => false];
    }
}
