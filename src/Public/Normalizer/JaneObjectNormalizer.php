<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Normalizer;

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
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            'KatapultAPI\\Public\\Model\\SignupCampaignArguments' => 'KatapultAPI\\Public\\Normalizer\\SignupCampaignArgumentsNormalizer',
            'KatapultAPI\\Public\\Model\\InternalAuthError' => 'KatapultAPI\\Public\\Normalizer\\InternalAuthErrorNormalizer',
            'KatapultAPI\\Public\\Model\\InvalidCouponCode' => 'KatapultAPI\\Public\\Normalizer\\InvalidCouponCodeNormalizer',
            'KatapultAPI\\Public\\Model\\ValidationError' => 'KatapultAPI\\Public\\Normalizer\\ValidationErrorNormalizer',
            'KatapultAPI\\Public\\Model\\RateLimitReached' => 'KatapultAPI\\Public\\Normalizer\\RateLimitReachedNormalizer',
            'KatapultAPI\\Public\\Model\\GetPricingPrices200ResponsePrices' => 'KatapultAPI\\Public\\Normalizer\\GetPricingPrices200ResponsePricesNormalizer',
            'KatapultAPI\\Public\\Model\\PriceVariant' => 'KatapultAPI\\Public\\Normalizer\\PriceVariantNormalizer',
            'KatapultAPI\\Public\\Model\\Price' => 'KatapultAPI\\Public\\Normalizer\\PriceNormalizer',
            'KatapultAPI\\Public\\Model\\Currency' => 'KatapultAPI\\Public\\Normalizer\\CurrencyNormalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimateResourceArguments' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimateResourceArgumentsNormalizer',
            'KatapultAPI\\Public\\Model\\CurrencyLookup' => 'KatapultAPI\\Public\\Normalizer\\CurrencyLookupNormalizer',
            'KatapultAPI\\Public\\Model\\CountryLookup' => 'KatapultAPI\\Public\\Normalizer\\CountryLookupNormalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimate' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimateNormalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimateResource' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimateResourceNormalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimateResourcePackage' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimateResourcePackageNormalizer',
            'KatapultAPI\\Public\\Model\\VirtualMachinePackage' => 'KatapultAPI\\Public\\Normalizer\\VirtualMachinePackageNormalizer',
            'KatapultAPI\\Public\\Model\\VirtualMachinePackageIcon' => 'KatapultAPI\\Public\\Normalizer\\VirtualMachinePackageIconNormalizer',
            'KatapultAPI\\Public\\Model\\Attachment' => 'KatapultAPI\\Public\\Normalizer\\AttachmentNormalizer',
            'KatapultAPI\\Public\\Model\\VirtualMachinePackageGroup' => 'KatapultAPI\\Public\\Normalizer\\VirtualMachinePackageGroupNormalizer',
            'KatapultAPI\\Public\\Model\\MissingResourcesSchema' => 'KatapultAPI\\Public\\Normalizer\\MissingResourcesSchemaNormalizer',
            'KatapultAPI\\Public\\Model\\InvalidEstimateResource' => 'KatapultAPI\\Public\\Normalizer\\InvalidEstimateResourceNormalizer',
            'KatapultAPI\\Public\\Model\\InvalidEstimateResourceSchema' => 'KatapultAPI\\Public\\Normalizer\\InvalidEstimateResourceSchemaNormalizer',
            'KatapultAPI\\Public\\Model\\InvalidEstimateQuantity' => 'KatapultAPI\\Public\\Normalizer\\InvalidEstimateQuantityNormalizer',
            'KatapultAPI\\Public\\Model\\InvalidEstimateQuantitySchema' => 'KatapultAPI\\Public\\Normalizer\\InvalidEstimateQuantitySchemaNormalizer',
            'KatapultAPI\\Public\\Model\\CurrencyNotFoundSchema' => 'KatapultAPI\\Public\\Normalizer\\CurrencyNotFoundSchemaNormalizer',
            'KatapultAPI\\Public\\Model\\CountryNotFoundSchema' => 'KatapultAPI\\Public\\Normalizer\\CountryNotFoundSchemaNormalizer',
            'KatapultAPI\\Public\\Model\\PaginationObject' => 'KatapultAPI\\Public\\Normalizer\\PaginationObjectNormalizer',
            'KatapultAPI\\Public\\Model\\DataCenter' => 'KatapultAPI\\Public\\Normalizer\\DataCenterNormalizer',
            'KatapultAPI\\Public\\Model\\ResponseAPIAuthenticator403Response' => 'KatapultAPI\\Public\\Normalizer\\ResponseAPIAuthenticator403ResponseNormalizer',
            'KatapultAPI\\Public\\Model\\ResponseInvalidCouponCodeResponse' => 'KatapultAPI\\Public\\Normalizer\\ResponseInvalidCouponCodeResponseNormalizer',
            'KatapultAPI\\Public\\Model\\ResponseValidationErrorResponse' => 'KatapultAPI\\Public\\Normalizer\\ResponseValidationErrorResponseNormalizer',
            'KatapultAPI\\Public\\Model\\ResponseAPIAuthenticator429Response' => 'KatapultAPI\\Public\\Normalizer\\ResponseAPIAuthenticator429ResponseNormalizer',
            'KatapultAPI\\Public\\Model\\DataCentersGetResponse200' => 'KatapultAPI\\Public\\Normalizer\\DataCentersGetResponse200Normalizer',
            'KatapultAPI\\Public\\Model\\PricingPricesGetResponse200' => 'KatapultAPI\\Public\\Normalizer\\PricingPricesGetResponse200Normalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimatePostBody' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimatePostBodyNormalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimatePostResponse200' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimatePostResponse200Normalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimatePostResponse200Estimate' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimatePostResponse200EstimateNormalizer',
            'KatapultAPI\\Public\\Model\\SignupsPostBody' => 'KatapultAPI\\Public\\Normalizer\\SignupsPostBodyNormalizer',
            'KatapultAPI\\Public\\Model\\SignupsPostResponse200' => 'KatapultAPI\\Public\\Normalizer\\SignupsPostResponse200Normalizer',
            'KatapultAPI\\Public\\Model\\StatsGetResponse200' => 'KatapultAPI\\Public\\Normalizer\\StatsGetResponse200Normalizer',
            'KatapultAPI\\Public\\Model\\VirtualMachinePackagesGetResponse200' => 'KatapultAPI\\Public\\Normalizer\\VirtualMachinePackagesGetResponse200Normalizer',
            '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\KatapultAPI\\Public\\Runtime\\Normalizer\\ReferenceNormalizer',
        ];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['KatapultAPI\\Public\\Model\\SignupCampaignArguments' => false, 'KatapultAPI\\Public\\Model\\InternalAuthError' => false, 'KatapultAPI\\Public\\Model\\InvalidCouponCode' => false, 'KatapultAPI\\Public\\Model\\ValidationError' => false, 'KatapultAPI\\Public\\Model\\RateLimitReached' => false, 'KatapultAPI\\Public\\Model\\GetPricingPrices200ResponsePrices' => false, 'KatapultAPI\\Public\\Model\\PriceVariant' => false, 'KatapultAPI\\Public\\Model\\Price' => false, 'KatapultAPI\\Public\\Model\\Currency' => false, 'KatapultAPI\\Public\\Model\\PricingEstimateResourceArguments' => false, 'KatapultAPI\\Public\\Model\\CurrencyLookup' => false, 'KatapultAPI\\Public\\Model\\CountryLookup' => false, 'KatapultAPI\\Public\\Model\\PricingEstimate' => false, 'KatapultAPI\\Public\\Model\\PricingEstimateResource' => false, 'KatapultAPI\\Public\\Model\\PricingEstimateResourcePackage' => false, 'KatapultAPI\\Public\\Model\\VirtualMachinePackage' => false, 'KatapultAPI\\Public\\Model\\VirtualMachinePackageIcon' => false, 'KatapultAPI\\Public\\Model\\Attachment' => false, 'KatapultAPI\\Public\\Model\\VirtualMachinePackageGroup' => false, 'KatapultAPI\\Public\\Model\\MissingResourcesSchema' => false, 'KatapultAPI\\Public\\Model\\InvalidEstimateResource' => false, 'KatapultAPI\\Public\\Model\\InvalidEstimateResourceSchema' => false, 'KatapultAPI\\Public\\Model\\InvalidEstimateQuantity' => false, 'KatapultAPI\\Public\\Model\\InvalidEstimateQuantitySchema' => false, 'KatapultAPI\\Public\\Model\\CurrencyNotFoundSchema' => false, 'KatapultAPI\\Public\\Model\\CountryNotFoundSchema' => false, 'KatapultAPI\\Public\\Model\\PaginationObject' => false, 'KatapultAPI\\Public\\Model\\DataCenter' => false, 'KatapultAPI\\Public\\Model\\ResponseAPIAuthenticator403Response' => false, 'KatapultAPI\\Public\\Model\\ResponseInvalidCouponCodeResponse' => false, 'KatapultAPI\\Public\\Model\\ResponseValidationErrorResponse' => false, 'KatapultAPI\\Public\\Model\\ResponseAPIAuthenticator429Response' => false, 'KatapultAPI\\Public\\Model\\DataCentersGetResponse200' => false, 'KatapultAPI\\Public\\Model\\PricingPricesGetResponse200' => false, 'KatapultAPI\\Public\\Model\\PricingEstimatePostBody' => false, 'KatapultAPI\\Public\\Model\\PricingEstimatePostResponse200' => false, 'KatapultAPI\\Public\\Model\\PricingEstimatePostResponse200Estimate' => false, 'KatapultAPI\\Public\\Model\\SignupsPostBody' => false, 'KatapultAPI\\Public\\Model\\SignupsPostResponse200' => false, 'KatapultAPI\\Public\\Model\\StatsGetResponse200' => false, 'KatapultAPI\\Public\\Model\\VirtualMachinePackagesGetResponse200' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            'KatapultAPI\\Public\\Model\\SignupCampaignArguments' => 'KatapultAPI\\Public\\Normalizer\\SignupCampaignArgumentsNormalizer',
            'KatapultAPI\\Public\\Model\\InternalAuthError' => 'KatapultAPI\\Public\\Normalizer\\InternalAuthErrorNormalizer',
            'KatapultAPI\\Public\\Model\\InvalidCouponCode' => 'KatapultAPI\\Public\\Normalizer\\InvalidCouponCodeNormalizer',
            'KatapultAPI\\Public\\Model\\ValidationError' => 'KatapultAPI\\Public\\Normalizer\\ValidationErrorNormalizer',
            'KatapultAPI\\Public\\Model\\RateLimitReached' => 'KatapultAPI\\Public\\Normalizer\\RateLimitReachedNormalizer',
            'KatapultAPI\\Public\\Model\\GetPricingPrices200ResponsePrices' => 'KatapultAPI\\Public\\Normalizer\\GetPricingPrices200ResponsePricesNormalizer',
            'KatapultAPI\\Public\\Model\\PriceVariant' => 'KatapultAPI\\Public\\Normalizer\\PriceVariantNormalizer',
            'KatapultAPI\\Public\\Model\\Price' => 'KatapultAPI\\Public\\Normalizer\\PriceNormalizer',
            'KatapultAPI\\Public\\Model\\Currency' => 'KatapultAPI\\Public\\Normalizer\\CurrencyNormalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimateResourceArguments' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimateResourceArgumentsNormalizer',
            'KatapultAPI\\Public\\Model\\CurrencyLookup' => 'KatapultAPI\\Public\\Normalizer\\CurrencyLookupNormalizer',
            'KatapultAPI\\Public\\Model\\CountryLookup' => 'KatapultAPI\\Public\\Normalizer\\CountryLookupNormalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimate' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimateNormalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimateResource' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimateResourceNormalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimateResourcePackage' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimateResourcePackageNormalizer',
            'KatapultAPI\\Public\\Model\\VirtualMachinePackage' => 'KatapultAPI\\Public\\Normalizer\\VirtualMachinePackageNormalizer',
            'KatapultAPI\\Public\\Model\\VirtualMachinePackageIcon' => 'KatapultAPI\\Public\\Normalizer\\VirtualMachinePackageIconNormalizer',
            'KatapultAPI\\Public\\Model\\Attachment' => 'KatapultAPI\\Public\\Normalizer\\AttachmentNormalizer',
            'KatapultAPI\\Public\\Model\\VirtualMachinePackageGroup' => 'KatapultAPI\\Public\\Normalizer\\VirtualMachinePackageGroupNormalizer',
            'KatapultAPI\\Public\\Model\\MissingResourcesSchema' => 'KatapultAPI\\Public\\Normalizer\\MissingResourcesSchemaNormalizer',
            'KatapultAPI\\Public\\Model\\InvalidEstimateResource' => 'KatapultAPI\\Public\\Normalizer\\InvalidEstimateResourceNormalizer',
            'KatapultAPI\\Public\\Model\\InvalidEstimateResourceSchema' => 'KatapultAPI\\Public\\Normalizer\\InvalidEstimateResourceSchemaNormalizer',
            'KatapultAPI\\Public\\Model\\InvalidEstimateQuantity' => 'KatapultAPI\\Public\\Normalizer\\InvalidEstimateQuantityNormalizer',
            'KatapultAPI\\Public\\Model\\InvalidEstimateQuantitySchema' => 'KatapultAPI\\Public\\Normalizer\\InvalidEstimateQuantitySchemaNormalizer',
            'KatapultAPI\\Public\\Model\\CurrencyNotFoundSchema' => 'KatapultAPI\\Public\\Normalizer\\CurrencyNotFoundSchemaNormalizer',
            'KatapultAPI\\Public\\Model\\CountryNotFoundSchema' => 'KatapultAPI\\Public\\Normalizer\\CountryNotFoundSchemaNormalizer',
            'KatapultAPI\\Public\\Model\\PaginationObject' => 'KatapultAPI\\Public\\Normalizer\\PaginationObjectNormalizer',
            'KatapultAPI\\Public\\Model\\DataCenter' => 'KatapultAPI\\Public\\Normalizer\\DataCenterNormalizer',
            'KatapultAPI\\Public\\Model\\ResponseAPIAuthenticator403Response' => 'KatapultAPI\\Public\\Normalizer\\ResponseAPIAuthenticator403ResponseNormalizer',
            'KatapultAPI\\Public\\Model\\ResponseInvalidCouponCodeResponse' => 'KatapultAPI\\Public\\Normalizer\\ResponseInvalidCouponCodeResponseNormalizer',
            'KatapultAPI\\Public\\Model\\ResponseValidationErrorResponse' => 'KatapultAPI\\Public\\Normalizer\\ResponseValidationErrorResponseNormalizer',
            'KatapultAPI\\Public\\Model\\ResponseAPIAuthenticator429Response' => 'KatapultAPI\\Public\\Normalizer\\ResponseAPIAuthenticator429ResponseNormalizer',
            'KatapultAPI\\Public\\Model\\DataCentersGetResponse200' => 'KatapultAPI\\Public\\Normalizer\\DataCentersGetResponse200Normalizer',
            'KatapultAPI\\Public\\Model\\PricingPricesGetResponse200' => 'KatapultAPI\\Public\\Normalizer\\PricingPricesGetResponse200Normalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimatePostBody' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimatePostBodyNormalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimatePostResponse200' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimatePostResponse200Normalizer',
            'KatapultAPI\\Public\\Model\\PricingEstimatePostResponse200Estimate' => 'KatapultAPI\\Public\\Normalizer\\PricingEstimatePostResponse200EstimateNormalizer',
            'KatapultAPI\\Public\\Model\\SignupsPostBody' => 'KatapultAPI\\Public\\Normalizer\\SignupsPostBodyNormalizer',
            'KatapultAPI\\Public\\Model\\SignupsPostResponse200' => 'KatapultAPI\\Public\\Normalizer\\SignupsPostResponse200Normalizer',
            'KatapultAPI\\Public\\Model\\StatsGetResponse200' => 'KatapultAPI\\Public\\Normalizer\\StatsGetResponse200Normalizer',
            'KatapultAPI\\Public\\Model\\VirtualMachinePackagesGetResponse200' => 'KatapultAPI\\Public\\Normalizer\\VirtualMachinePackagesGetResponse200Normalizer',
            '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\KatapultAPI\\Public\\Runtime\\Normalizer\\ReferenceNormalizer',
        ];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['KatapultAPI\\Public\\Model\\SignupCampaignArguments' => false, 'KatapultAPI\\Public\\Model\\InternalAuthError' => false, 'KatapultAPI\\Public\\Model\\InvalidCouponCode' => false, 'KatapultAPI\\Public\\Model\\ValidationError' => false, 'KatapultAPI\\Public\\Model\\RateLimitReached' => false, 'KatapultAPI\\Public\\Model\\GetPricingPrices200ResponsePrices' => false, 'KatapultAPI\\Public\\Model\\PriceVariant' => false, 'KatapultAPI\\Public\\Model\\Price' => false, 'KatapultAPI\\Public\\Model\\Currency' => false, 'KatapultAPI\\Public\\Model\\PricingEstimateResourceArguments' => false, 'KatapultAPI\\Public\\Model\\CurrencyLookup' => false, 'KatapultAPI\\Public\\Model\\CountryLookup' => false, 'KatapultAPI\\Public\\Model\\PricingEstimate' => false, 'KatapultAPI\\Public\\Model\\PricingEstimateResource' => false, 'KatapultAPI\\Public\\Model\\PricingEstimateResourcePackage' => false, 'KatapultAPI\\Public\\Model\\VirtualMachinePackage' => false, 'KatapultAPI\\Public\\Model\\VirtualMachinePackageIcon' => false, 'KatapultAPI\\Public\\Model\\Attachment' => false, 'KatapultAPI\\Public\\Model\\VirtualMachinePackageGroup' => false, 'KatapultAPI\\Public\\Model\\MissingResourcesSchema' => false, 'KatapultAPI\\Public\\Model\\InvalidEstimateResource' => false, 'KatapultAPI\\Public\\Model\\InvalidEstimateResourceSchema' => false, 'KatapultAPI\\Public\\Model\\InvalidEstimateQuantity' => false, 'KatapultAPI\\Public\\Model\\InvalidEstimateQuantitySchema' => false, 'KatapultAPI\\Public\\Model\\CurrencyNotFoundSchema' => false, 'KatapultAPI\\Public\\Model\\CountryNotFoundSchema' => false, 'KatapultAPI\\Public\\Model\\PaginationObject' => false, 'KatapultAPI\\Public\\Model\\DataCenter' => false, 'KatapultAPI\\Public\\Model\\ResponseAPIAuthenticator403Response' => false, 'KatapultAPI\\Public\\Model\\ResponseInvalidCouponCodeResponse' => false, 'KatapultAPI\\Public\\Model\\ResponseValidationErrorResponse' => false, 'KatapultAPI\\Public\\Model\\ResponseAPIAuthenticator429Response' => false, 'KatapultAPI\\Public\\Model\\DataCentersGetResponse200' => false, 'KatapultAPI\\Public\\Model\\PricingPricesGetResponse200' => false, 'KatapultAPI\\Public\\Model\\PricingEstimatePostBody' => false, 'KatapultAPI\\Public\\Model\\PricingEstimatePostResponse200' => false, 'KatapultAPI\\Public\\Model\\PricingEstimatePostResponse200Estimate' => false, 'KatapultAPI\\Public\\Model\\SignupsPostBody' => false, 'KatapultAPI\\Public\\Model\\SignupsPostResponse200' => false, 'KatapultAPI\\Public\\Model\\StatsGetResponse200' => false, 'KatapultAPI\\Public\\Model\\VirtualMachinePackagesGetResponse200' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }
    }
}
