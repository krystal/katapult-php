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
    class DeleteVirtualMachine200ResponseVirtualMachineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachine::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachine::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachine();
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
            if (\array_key_exists('hostname', $data)) {
                $object->setHostname($data['hostname']);
                unset($data['hostname']);
            }
            if (\array_key_exists('fqdn', $data)) {
                $object->setFqdn($data['fqdn']);
                unset($data['fqdn']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('initial_root_password', $data) && $data['initial_root_password'] !== null) {
                $object->setInitialRootPassword($data['initial_root_password']);
                unset($data['initial_root_password']);
            } elseif (\array_key_exists('initial_root_password', $data) && $data['initial_root_password'] === null) {
                $object->setInitialRootPassword(null);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('zone', $data)) {
                $object->setZone($this->denormalizer->denormalize($data['zone'], \KatapultAPI\Core\Model\Zone::class, 'json', $context));
                unset($data['zone']);
            }
            if (\array_key_exists('organization', $data)) {
                $object->setOrganization($this->denormalizer->denormalize($data['organization'], \KatapultAPI\Core\Model\Organization::class, 'json', $context));
                unset($data['organization']);
            }
            if (\array_key_exists('group', $data) && $data['group'] !== null) {
                $object->setGroup($this->denormalizer->denormalize($data['group'], \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachineGroup::class, 'json', $context));
                unset($data['group']);
            } elseif (\array_key_exists('group', $data) && $data['group'] === null) {
                $object->setGroup(null);
            }
            if (\array_key_exists('package', $data) && $data['package'] !== null) {
                $object->setPackage($this->denormalizer->denormalize($data['package'], \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachinePackage::class, 'json', $context));
                unset($data['package']);
            } elseif (\array_key_exists('package', $data) && $data['package'] === null) {
                $object->setPackage(null);
            }
            if (\array_key_exists('attached_iso', $data) && $data['attached_iso'] !== null) {
                $object->setAttachedIso($this->denormalizer->denormalize($data['attached_iso'], \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachineAttachedIso::class, 'json', $context));
                unset($data['attached_iso']);
            } elseif (\array_key_exists('attached_iso', $data) && $data['attached_iso'] === null) {
                $object->setAttachedIso(null);
            }
            if (\array_key_exists('memory_in_gb', $data) && $data['memory_in_gb'] !== null) {
                $object->setMemoryInGb($data['memory_in_gb']);
                unset($data['memory_in_gb']);
            } elseif (\array_key_exists('memory_in_gb', $data) && $data['memory_in_gb'] === null) {
                $object->setMemoryInGb(null);
            }
            if (\array_key_exists('cpu_cores', $data) && $data['cpu_cores'] !== null) {
                $object->setCpuCores($data['cpu_cores']);
                unset($data['cpu_cores']);
            } elseif (\array_key_exists('cpu_cores', $data) && $data['cpu_cores'] === null) {
                $object->setCpuCores(null);
            }
            if (\array_key_exists('use_dedicated_cpus', $data) && $data['use_dedicated_cpus'] !== null) {
                $object->setUseDedicatedCpus($data['use_dedicated_cpus']);
                unset($data['use_dedicated_cpus']);
            } elseif (\array_key_exists('use_dedicated_cpus', $data) && $data['use_dedicated_cpus'] === null) {
                $object->setUseDedicatedCpus(null);
            }
            if (\array_key_exists('gpu_type', $data) && $data['gpu_type'] !== null) {
                $object->setGpuType($this->denormalizer->denormalize($data['gpu_type'], \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachineGpuType::class, 'json', $context));
                unset($data['gpu_type']);
            } elseif (\array_key_exists('gpu_type', $data) && $data['gpu_type'] === null) {
                $object->setGpuType(null);
            }
            if (\array_key_exists('gpus', $data)) {
                $values = [];
                foreach ($data['gpus'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \KatapultAPI\Core\Model\VirtualMachineGPU::class, 'json', $context);
                }
                $object->setGpus($values);
                unset($data['gpus']);
            }
            if (\array_key_exists('tags', $data)) {
                $values_1 = [];
                foreach ($data['tags'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \KatapultAPI\Core\Model\Tag::class, 'json', $context);
                }
                $object->setTags($values_1);
                unset($data['tags']);
            }
            if (\array_key_exists('tag_names', $data)) {
                $values_2 = [];
                foreach ($data['tag_names'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setTagNames($values_2);
                unset($data['tag_names']);
            }
            if (\array_key_exists('ip_addresses', $data)) {
                $values_3 = [];
                foreach ($data['ip_addresses'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \KatapultAPI\Core\Model\IPAddress::class, 'json', $context);
                }
                $object->setIpAddresses($values_3);
                unset($data['ip_addresses']);
            }
            if (\array_key_exists('hypervisor', $data) && $data['hypervisor'] !== null) {
                $object->setHypervisor($this->denormalizer->denormalize($data['hypervisor'], \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachineHypervisor::class, 'json', $context));
                unset($data['hypervisor']);
            } elseif (\array_key_exists('hypervisor', $data) && $data['hypervisor'] === null) {
                $object->setHypervisor(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('fqdn') && null !== $object->getFqdn()) {
                $data['fqdn'] = $object->getFqdn();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('initialRootPassword') && null !== $object->getInitialRootPassword()) {
                $data['initial_root_password'] = $object->getInitialRootPassword();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('zone') && null !== $object->getZone()) {
                $data['zone'] = $this->normalizer->normalize($object->getZone(), 'json', $context);
            }
            if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
                $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
            }
            if ($object->isInitialized('group') && null !== $object->getGroup()) {
                $data['group'] = $this->normalizer->normalize($object->getGroup(), 'json', $context);
            }
            if ($object->isInitialized('package') && null !== $object->getPackage()) {
                $data['package'] = $this->normalizer->normalize($object->getPackage(), 'json', $context);
            }
            if ($object->isInitialized('attachedIso') && null !== $object->getAttachedIso()) {
                $data['attached_iso'] = $this->normalizer->normalize($object->getAttachedIso(), 'json', $context);
            }
            if ($object->isInitialized('memoryInGb') && null !== $object->getMemoryInGb()) {
                $data['memory_in_gb'] = $object->getMemoryInGb();
            }
            if ($object->isInitialized('cpuCores') && null !== $object->getCpuCores()) {
                $data['cpu_cores'] = $object->getCpuCores();
            }
            if ($object->isInitialized('useDedicatedCpus') && null !== $object->getUseDedicatedCpus()) {
                $data['use_dedicated_cpus'] = $object->getUseDedicatedCpus();
            }
            if ($object->isInitialized('gpuType') && null !== $object->getGpuType()) {
                $data['gpu_type'] = $this->normalizer->normalize($object->getGpuType(), 'json', $context);
            }
            if ($object->isInitialized('gpus') && null !== $object->getGpus()) {
                $values = [];
                foreach ($object->getGpus() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['gpus'] = $values;
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_1 = [];
                foreach ($object->getTags() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['tags'] = $values_1;
            }
            if ($object->isInitialized('tagNames') && null !== $object->getTagNames()) {
                $values_2 = [];
                foreach ($object->getTagNames() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['tag_names'] = $values_2;
            }
            if ($object->isInitialized('ipAddresses') && null !== $object->getIpAddresses()) {
                $values_3 = [];
                foreach ($object->getIpAddresses() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['ip_addresses'] = $values_3;
            }
            if ($object->isInitialized('hypervisor') && null !== $object->getHypervisor()) {
                $data['hypervisor'] = $this->normalizer->normalize($object->getHypervisor(), 'json', $context);
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachine::class => false];
        }
    }
} else {
    class DeleteVirtualMachine200ResponseVirtualMachineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachine::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachine::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachine();
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
            if (\array_key_exists('hostname', $data)) {
                $object->setHostname($data['hostname']);
                unset($data['hostname']);
            }
            if (\array_key_exists('fqdn', $data)) {
                $object->setFqdn($data['fqdn']);
                unset($data['fqdn']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('initial_root_password', $data) && $data['initial_root_password'] !== null) {
                $object->setInitialRootPassword($data['initial_root_password']);
                unset($data['initial_root_password']);
            } elseif (\array_key_exists('initial_root_password', $data) && $data['initial_root_password'] === null) {
                $object->setInitialRootPassword(null);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('zone', $data)) {
                $object->setZone($this->denormalizer->denormalize($data['zone'], \KatapultAPI\Core\Model\Zone::class, 'json', $context));
                unset($data['zone']);
            }
            if (\array_key_exists('organization', $data)) {
                $object->setOrganization($this->denormalizer->denormalize($data['organization'], \KatapultAPI\Core\Model\Organization::class, 'json', $context));
                unset($data['organization']);
            }
            if (\array_key_exists('group', $data) && $data['group'] !== null) {
                $object->setGroup($this->denormalizer->denormalize($data['group'], \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachineGroup::class, 'json', $context));
                unset($data['group']);
            } elseif (\array_key_exists('group', $data) && $data['group'] === null) {
                $object->setGroup(null);
            }
            if (\array_key_exists('package', $data) && $data['package'] !== null) {
                $object->setPackage($this->denormalizer->denormalize($data['package'], \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachinePackage::class, 'json', $context));
                unset($data['package']);
            } elseif (\array_key_exists('package', $data) && $data['package'] === null) {
                $object->setPackage(null);
            }
            if (\array_key_exists('attached_iso', $data) && $data['attached_iso'] !== null) {
                $object->setAttachedIso($this->denormalizer->denormalize($data['attached_iso'], \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachineAttachedIso::class, 'json', $context));
                unset($data['attached_iso']);
            } elseif (\array_key_exists('attached_iso', $data) && $data['attached_iso'] === null) {
                $object->setAttachedIso(null);
            }
            if (\array_key_exists('memory_in_gb', $data) && $data['memory_in_gb'] !== null) {
                $object->setMemoryInGb($data['memory_in_gb']);
                unset($data['memory_in_gb']);
            } elseif (\array_key_exists('memory_in_gb', $data) && $data['memory_in_gb'] === null) {
                $object->setMemoryInGb(null);
            }
            if (\array_key_exists('cpu_cores', $data) && $data['cpu_cores'] !== null) {
                $object->setCpuCores($data['cpu_cores']);
                unset($data['cpu_cores']);
            } elseif (\array_key_exists('cpu_cores', $data) && $data['cpu_cores'] === null) {
                $object->setCpuCores(null);
            }
            if (\array_key_exists('use_dedicated_cpus', $data) && $data['use_dedicated_cpus'] !== null) {
                $object->setUseDedicatedCpus($data['use_dedicated_cpus']);
                unset($data['use_dedicated_cpus']);
            } elseif (\array_key_exists('use_dedicated_cpus', $data) && $data['use_dedicated_cpus'] === null) {
                $object->setUseDedicatedCpus(null);
            }
            if (\array_key_exists('gpu_type', $data) && $data['gpu_type'] !== null) {
                $object->setGpuType($this->denormalizer->denormalize($data['gpu_type'], \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachineGpuType::class, 'json', $context));
                unset($data['gpu_type']);
            } elseif (\array_key_exists('gpu_type', $data) && $data['gpu_type'] === null) {
                $object->setGpuType(null);
            }
            if (\array_key_exists('gpus', $data)) {
                $values = [];
                foreach ($data['gpus'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \KatapultAPI\Core\Model\VirtualMachineGPU::class, 'json', $context);
                }
                $object->setGpus($values);
                unset($data['gpus']);
            }
            if (\array_key_exists('tags', $data)) {
                $values_1 = [];
                foreach ($data['tags'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \KatapultAPI\Core\Model\Tag::class, 'json', $context);
                }
                $object->setTags($values_1);
                unset($data['tags']);
            }
            if (\array_key_exists('tag_names', $data)) {
                $values_2 = [];
                foreach ($data['tag_names'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setTagNames($values_2);
                unset($data['tag_names']);
            }
            if (\array_key_exists('ip_addresses', $data)) {
                $values_3 = [];
                foreach ($data['ip_addresses'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \KatapultAPI\Core\Model\IPAddress::class, 'json', $context);
                }
                $object->setIpAddresses($values_3);
                unset($data['ip_addresses']);
            }
            if (\array_key_exists('hypervisor', $data) && $data['hypervisor'] !== null) {
                $object->setHypervisor($this->denormalizer->denormalize($data['hypervisor'], \KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachineHypervisor::class, 'json', $context));
                unset($data['hypervisor']);
            } elseif (\array_key_exists('hypervisor', $data) && $data['hypervisor'] === null) {
                $object->setHypervisor(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('fqdn') && null !== $object->getFqdn()) {
                $data['fqdn'] = $object->getFqdn();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('initialRootPassword') && null !== $object->getInitialRootPassword()) {
                $data['initial_root_password'] = $object->getInitialRootPassword();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('zone') && null !== $object->getZone()) {
                $data['zone'] = $this->normalizer->normalize($object->getZone(), 'json', $context);
            }
            if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
                $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
            }
            if ($object->isInitialized('group') && null !== $object->getGroup()) {
                $data['group'] = $this->normalizer->normalize($object->getGroup(), 'json', $context);
            }
            if ($object->isInitialized('package') && null !== $object->getPackage()) {
                $data['package'] = $this->normalizer->normalize($object->getPackage(), 'json', $context);
            }
            if ($object->isInitialized('attachedIso') && null !== $object->getAttachedIso()) {
                $data['attached_iso'] = $this->normalizer->normalize($object->getAttachedIso(), 'json', $context);
            }
            if ($object->isInitialized('memoryInGb') && null !== $object->getMemoryInGb()) {
                $data['memory_in_gb'] = $object->getMemoryInGb();
            }
            if ($object->isInitialized('cpuCores') && null !== $object->getCpuCores()) {
                $data['cpu_cores'] = $object->getCpuCores();
            }
            if ($object->isInitialized('useDedicatedCpus') && null !== $object->getUseDedicatedCpus()) {
                $data['use_dedicated_cpus'] = $object->getUseDedicatedCpus();
            }
            if ($object->isInitialized('gpuType') && null !== $object->getGpuType()) {
                $data['gpu_type'] = $this->normalizer->normalize($object->getGpuType(), 'json', $context);
            }
            if ($object->isInitialized('gpus') && null !== $object->getGpus()) {
                $values = [];
                foreach ($object->getGpus() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['gpus'] = $values;
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_1 = [];
                foreach ($object->getTags() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['tags'] = $values_1;
            }
            if ($object->isInitialized('tagNames') && null !== $object->getTagNames()) {
                $values_2 = [];
                foreach ($object->getTagNames() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['tag_names'] = $values_2;
            }
            if ($object->isInitialized('ipAddresses') && null !== $object->getIpAddresses()) {
                $values_3 = [];
                foreach ($object->getIpAddresses() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['ip_addresses'] = $values_3;
            }
            if ($object->isInitialized('hypervisor') && null !== $object->getHypervisor()) {
                $data['hypervisor'] = $this->normalizer->normalize($object->getHypervisor(), 'json', $context);
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\KatapultAPI\Core\Model\DeleteVirtualMachine200ResponseVirtualMachine::class => false];
        }
    }
}
