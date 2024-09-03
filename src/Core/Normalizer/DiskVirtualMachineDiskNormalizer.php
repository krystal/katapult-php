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
    class DiskVirtualMachineDiskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\DiskVirtualMachineDisk::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\DiskVirtualMachineDisk::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\DiskVirtualMachineDisk();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('virtual_machine', $data)) {
                $object->setVirtualMachine($this->denormalizer->denormalize($data['virtual_machine'], \KatapultAPI\Core\Model\VirtualMachine::class, 'json', $context));
                unset($data['virtual_machine']);
            }
            if (\array_key_exists('disk', $data)) {
                $object->setDisk($this->denormalizer->denormalize($data['disk'], \KatapultAPI\Core\Model\Disk::class, 'json', $context));
                unset($data['disk']);
            }
            if (\array_key_exists('attach_on_boot', $data)) {
                $object->setAttachOnBoot($data['attach_on_boot']);
                unset($data['attach_on_boot']);
            }
            if (\array_key_exists('boot', $data)) {
                $object->setBoot($data['boot']);
                unset($data['boot']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
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
            if ($object->isInitialized('virtualMachine') && null !== $object->getVirtualMachine()) {
                $data['virtual_machine'] = $this->normalizer->normalize($object->getVirtualMachine(), 'json', $context);
            }
            if ($object->isInitialized('disk') && null !== $object->getDisk()) {
                $data['disk'] = $this->normalizer->normalize($object->getDisk(), 'json', $context);
            }
            if ($object->isInitialized('attachOnBoot') && null !== $object->getAttachOnBoot()) {
                $data['attach_on_boot'] = $object->getAttachOnBoot();
            }
            if ($object->isInitialized('boot') && null !== $object->getBoot()) {
                $data['boot'] = $object->getBoot();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
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
            return [\KatapultAPI\Core\Model\DiskVirtualMachineDisk::class => false];
        }
    }
} else {
    class DiskVirtualMachineDiskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\DiskVirtualMachineDisk::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\DiskVirtualMachineDisk::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\DiskVirtualMachineDisk();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('virtual_machine', $data)) {
                $object->setVirtualMachine($this->denormalizer->denormalize($data['virtual_machine'], \KatapultAPI\Core\Model\VirtualMachine::class, 'json', $context));
                unset($data['virtual_machine']);
            }
            if (\array_key_exists('disk', $data)) {
                $object->setDisk($this->denormalizer->denormalize($data['disk'], \KatapultAPI\Core\Model\Disk::class, 'json', $context));
                unset($data['disk']);
            }
            if (\array_key_exists('attach_on_boot', $data)) {
                $object->setAttachOnBoot($data['attach_on_boot']);
                unset($data['attach_on_boot']);
            }
            if (\array_key_exists('boot', $data)) {
                $object->setBoot($data['boot']);
                unset($data['boot']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
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
            if ($object->isInitialized('virtualMachine') && null !== $object->getVirtualMachine()) {
                $data['virtual_machine'] = $this->normalizer->normalize($object->getVirtualMachine(), 'json', $context);
            }
            if ($object->isInitialized('disk') && null !== $object->getDisk()) {
                $data['disk'] = $this->normalizer->normalize($object->getDisk(), 'json', $context);
            }
            if ($object->isInitialized('attachOnBoot') && null !== $object->getAttachOnBoot()) {
                $data['attach_on_boot'] = $object->getAttachOnBoot();
            }
            if ($object->isInitialized('boot') && null !== $object->getBoot()) {
                $data['boot'] = $object->getBoot();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
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
            return [\KatapultAPI\Core\Model\DiskVirtualMachineDisk::class => false];
        }
    }
}
