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
    class OrganizationsOrganizationVirtualMachinesBuildPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('organization', $data)) {
                $object->setOrganization($this->denormalizer->denormalize($data['organization'], \KatapultAPI\Core\Model\OrganizationLookup::class, 'json', $context));
                unset($data['organization']);
            }
            if (\array_key_exists('zone', $data)) {
                $object->setZone($this->denormalizer->denormalize($data['zone'], \KatapultAPI\Core\Model\ZoneLookup::class, 'json', $context));
                unset($data['zone']);
            }
            if (\array_key_exists('data_center', $data)) {
                $object->setDataCenter($this->denormalizer->denormalize($data['data_center'], \KatapultAPI\Core\Model\DataCenterLookup::class, 'json', $context));
                unset($data['data_center']);
            }
            if (\array_key_exists('package', $data)) {
                $object->setPackage($this->denormalizer->denormalize($data['package'], \KatapultAPI\Core\Model\VirtualMachinePackageLookup::class, 'json', $context));
                unset($data['package']);
            }
            if (\array_key_exists('disk_template', $data)) {
                $object->setDiskTemplate($this->denormalizer->denormalize($data['disk_template'], \KatapultAPI\Core\Model\DiskTemplateLookup::class, 'json', $context));
                unset($data['disk_template']);
            }
            if (\array_key_exists('disk_template_options', $data)) {
                $values = [];
                foreach ($data['disk_template_options'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \KatapultAPI\Core\Model\KeyValue::class, 'json', $context);
                }
                $object->setDiskTemplateOptions($values);
                unset($data['disk_template_options']);
            }
            if (\array_key_exists('disks', $data)) {
                $values_1 = [];
                foreach ($data['disks'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \KatapultAPI\Core\Model\VirtualMachineBuildDiskArguments::class, 'json', $context);
                }
                $object->setDisks($values_1);
                unset($data['disks']);
            }
            if (\array_key_exists('network', $data)) {
                $object->setNetwork($this->denormalizer->denormalize($data['network'], \KatapultAPI\Core\Model\NetworkLookup::class, 'json', $context));
                unset($data['network']);
            }
            if (\array_key_exists('hostname', $data)) {
                $object->setHostname($data['hostname']);
                unset($data['hostname']);
            }
            if (\array_key_exists('annotations', $data)) {
                $values_2 = [];
                foreach ($data['annotations'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \KatapultAPI\Core\Model\KeyValue::class, 'json', $context);
                }
                $object->setAnnotations($values_2);
                unset($data['annotations']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
            if ($object->isInitialized('zone') && null !== $object->getZone()) {
                $data['zone'] = $this->normalizer->normalize($object->getZone(), 'json', $context);
            }
            if ($object->isInitialized('dataCenter') && null !== $object->getDataCenter()) {
                $data['data_center'] = $this->normalizer->normalize($object->getDataCenter(), 'json', $context);
            }
            $data['package'] = $this->normalizer->normalize($object->getPackage(), 'json', $context);
            if ($object->isInitialized('diskTemplate') && null !== $object->getDiskTemplate()) {
                $data['disk_template'] = $this->normalizer->normalize($object->getDiskTemplate(), 'json', $context);
            }
            if ($object->isInitialized('diskTemplateOptions') && null !== $object->getDiskTemplateOptions()) {
                $values = [];
                foreach ($object->getDiskTemplateOptions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['disk_template_options'] = $values;
            }
            if ($object->isInitialized('disks') && null !== $object->getDisks()) {
                $values_1 = [];
                foreach ($object->getDisks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['disks'] = $values_1;
            }
            if ($object->isInitialized('network') && null !== $object->getNetwork()) {
                $data['network'] = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
            }
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values_2 = [];
                foreach ($object->getAnnotations() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['annotations'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody::class => false];
        }
    }
} else {
    class OrganizationsOrganizationVirtualMachinesBuildPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('organization', $data)) {
                $object->setOrganization($this->denormalizer->denormalize($data['organization'], \KatapultAPI\Core\Model\OrganizationLookup::class, 'json', $context));
                unset($data['organization']);
            }
            if (\array_key_exists('zone', $data)) {
                $object->setZone($this->denormalizer->denormalize($data['zone'], \KatapultAPI\Core\Model\ZoneLookup::class, 'json', $context));
                unset($data['zone']);
            }
            if (\array_key_exists('data_center', $data)) {
                $object->setDataCenter($this->denormalizer->denormalize($data['data_center'], \KatapultAPI\Core\Model\DataCenterLookup::class, 'json', $context));
                unset($data['data_center']);
            }
            if (\array_key_exists('package', $data)) {
                $object->setPackage($this->denormalizer->denormalize($data['package'], \KatapultAPI\Core\Model\VirtualMachinePackageLookup::class, 'json', $context));
                unset($data['package']);
            }
            if (\array_key_exists('disk_template', $data)) {
                $object->setDiskTemplate($this->denormalizer->denormalize($data['disk_template'], \KatapultAPI\Core\Model\DiskTemplateLookup::class, 'json', $context));
                unset($data['disk_template']);
            }
            if (\array_key_exists('disk_template_options', $data)) {
                $values = [];
                foreach ($data['disk_template_options'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \KatapultAPI\Core\Model\KeyValue::class, 'json', $context);
                }
                $object->setDiskTemplateOptions($values);
                unset($data['disk_template_options']);
            }
            if (\array_key_exists('disks', $data)) {
                $values_1 = [];
                foreach ($data['disks'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \KatapultAPI\Core\Model\VirtualMachineBuildDiskArguments::class, 'json', $context);
                }
                $object->setDisks($values_1);
                unset($data['disks']);
            }
            if (\array_key_exists('network', $data)) {
                $object->setNetwork($this->denormalizer->denormalize($data['network'], \KatapultAPI\Core\Model\NetworkLookup::class, 'json', $context));
                unset($data['network']);
            }
            if (\array_key_exists('hostname', $data)) {
                $object->setHostname($data['hostname']);
                unset($data['hostname']);
            }
            if (\array_key_exists('annotations', $data)) {
                $values_2 = [];
                foreach ($data['annotations'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \KatapultAPI\Core\Model\KeyValue::class, 'json', $context);
                }
                $object->setAnnotations($values_2);
                unset($data['annotations']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
            if ($object->isInitialized('zone') && null !== $object->getZone()) {
                $data['zone'] = $this->normalizer->normalize($object->getZone(), 'json', $context);
            }
            if ($object->isInitialized('dataCenter') && null !== $object->getDataCenter()) {
                $data['data_center'] = $this->normalizer->normalize($object->getDataCenter(), 'json', $context);
            }
            $data['package'] = $this->normalizer->normalize($object->getPackage(), 'json', $context);
            if ($object->isInitialized('diskTemplate') && null !== $object->getDiskTemplate()) {
                $data['disk_template'] = $this->normalizer->normalize($object->getDiskTemplate(), 'json', $context);
            }
            if ($object->isInitialized('diskTemplateOptions') && null !== $object->getDiskTemplateOptions()) {
                $values = [];
                foreach ($object->getDiskTemplateOptions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['disk_template_options'] = $values;
            }
            if ($object->isInitialized('disks') && null !== $object->getDisks()) {
                $values_1 = [];
                foreach ($object->getDisks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['disks'] = $values_1;
            }
            if ($object->isInitialized('network') && null !== $object->getNetwork()) {
                $data['network'] = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
            }
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values_2 = [];
                foreach ($object->getAnnotations() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['annotations'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody::class => false];
        }
    }
}
