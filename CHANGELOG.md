# Changelog

## [4.0.2](https://github.com/krystal/katapult-php/compare/v4.0.1...v4.0.2) (2024-07-04)


### Bug Fixes

* generated with symfony/serializer v5.4 to fix incompatibility with interfaces ([9506231](https://github.com/krystal/katapult-php/commit/950623117efc01c229479570f8e05247319096d7))

## [4.0.1](https://github.com/krystal/katapult-php/compare/v4.0.0...v4.0.1) (2024-07-02)


### Bug Fixes

* lock Jane to 7.5 ([7ed6c55](https://github.com/krystal/katapult-php/commit/7ed6c555280bb26a47735aa4aff11b3e0a462753))

## [4.0.0](https://github.com/krystal/katapult-php/compare/v3.0.2...v4.0.0) (2024-07-01)


### ⚠ BREAKING CHANGES

* update to Katapult 2.43.1
* **openapi:** v3

### Features

* Add disk backup policy resource ([7f280a2](https://github.com/krystal/katapult-php/commit/7f280a279fb29410eb629b40fabda527e642d5f6))
* add disk templates as a resource ([65c8ad7](https://github.com/krystal/katapult-php/commit/65c8ad7f44de09724a1085e5defcafee5cd24c43))
* add support for optional index routes in the api ([1bfb875](https://github.com/krystal/katapult-php/commit/1bfb875317244b621edfb5f02bcd4e80360a7318))
* allow the Guzzle handler to be defined when setting up the API ([1c7bb5d](https://github.com/krystal/katapult-php/commit/1c7bb5d4ad11e44726b817c5fc2beb1e91e8e0b7))
* **openapi:** v3 ([b9f90bf](https://github.com/krystal/katapult-php/commit/b9f90bf697ae941b8dc9f756ce8ff2a8b39c5ada))
* update to Katapult 2.43.1 ([5c2ba9b](https://github.com/krystal/katapult-php/commit/5c2ba9b9cddd29e745a2210bfaba82e9af771f1a))


### Bug Fixes

* actually test the managed orgs ([16d4e91](https://github.com/krystal/katapult-php/commit/16d4e91c1d3066c6827f91f155648a8afb6903b3))
* api spec fixes for nullable and partial models ([fca8f39](https://github.com/krystal/katapult-php/commit/fca8f391312ee3aa34d0771aa00fc9911453569b))
* some API properties are nullable ([8b16a08](https://github.com/krystal/katapult-php/commit/8b16a08de4556df2130c4993f9b71fc0245061e8))


### Miscellaneous Chores

* 3.x to become main/default ([85ef77c](https://github.com/krystal/katapult-php/commit/85ef77c7691440ee72286ca46a29a1b1a5852a35))
* **3.x:** release 3.0.0 ([140c2ad](https://github.com/krystal/katapult-php/commit/140c2add81d2632a36556028e34b181ac0646e0b))
* add release please and codeowners ([#3](https://github.com/krystal/katapult-php/issues/3)) ([3dff614](https://github.com/krystal/katapult-php/commit/3dff614c38f5ba4d7e21b0ad73f7dea468f8c831))
* change php requirement to v7.4 ([36ae563](https://github.com/krystal/katapult-php/commit/36ae56376b4cb34c4c4c6de5c4635a811ee297d0))
* change to use pest for composer test ([d0fd725](https://github.com/krystal/katapult-php/commit/d0fd7258b77387b60347a2e7c02748321f805cb3))
* **CI:** fix ref to run release-please ([0aeb4e7](https://github.com/krystal/katapult-php/commit/0aeb4e78235dcf6e1020cea88995adeb8429ce5f))
* **CI:** specify all 3 release branches for release-please ([a33d1b2](https://github.com/krystal/katapult-php/commit/a33d1b27ccdc4e1f61692a28298c07710751ebf4))
* **CI:** update target branch ([a450cc9](https://github.com/krystal/katapult-php/commit/a450cc9596c99393d1249a2f5d3ccca372afdc71))
* **docs:** link to branches ([d2a5596](https://github.com/krystal/katapult-php/commit/d2a55968f0d34d9f816ab5fab80f54bb7ff20cf1))
* **docs:** provide usage example ([d2751bd](https://github.com/krystal/katapult-php/commit/d2751bd377000e1a1289d555fb0932083707d7b6))
* **docs:** v3 and up is semantic versioning ([25a59f2](https://github.com/krystal/katapult-php/commit/25a59f2d9009941d9833388e98134d8f2181e2b0))
* **main:** release 3.0.1 ([c06aa71](https://github.com/krystal/katapult-php/commit/c06aa711aad4642db7ca4b6c20a11689df5abba0))
* **main:** release 3.0.2 ([1b85dc3](https://github.com/krystal/katapult-php/commit/1b85dc3afd0ab9275cc96954e7b8faa3438e4966))
* **master:** release 2.3.0 ([488389f](https://github.com/krystal/katapult-php/commit/488389f107554655489b3938b7d3dd7cb68a3719))
* **release-please:** add v3 to targeted branches ([a3a39d9](https://github.com/krystal/katapult-php/commit/a3a39d9552dce302b1dc0c55ac06969e666ede26))
* **release-please:** update to newest GHA release-please version ([72db4de](https://github.com/krystal/katapult-php/commit/72db4de16985319433b43f81a9fda837e75e73d5))
* **release-please:** versioning ([b861b71](https://github.com/krystal/katapult-php/commit/b861b7186425c83f881cdfb59f067a4549590e12))
* remove build spec ([de8f59f](https://github.com/krystal/katapult-php/commit/de8f59f9544e1f65b6cfe874f25c33e4bc639b62))
* tidy up test ([d02553f](https://github.com/krystal/katapult-php/commit/d02553fb056d63bc918a97dbdd220116df060684))
* update readme ([ff2c2d2](https://github.com/krystal/katapult-php/commit/ff2c2d20de34a13a065d48317527282c90373abe))

## [3.0.2](https://github.com/krystal/katapult-php/compare/v3.0.1...v3.0.2) (2024-02-08)


### Bug Fixes

* api spec fixes for nullable and partial models ([fca8f39](https://github.com/krystal/katapult-php/commit/fca8f391312ee3aa34d0771aa00fc9911453569b))

## [3.0.1](https://github.com/krystal/katapult-php/compare/v3.0.0...v3.0.1) (2024-01-26)


### Bug Fixes

* some API properties are nullable ([8b16a08](https://github.com/krystal/katapult-php/commit/8b16a08de4556df2130c4993f9b71fc0245061e8))


### Miscellaneous Chores

* 3.x to become main/default ([85ef77c](https://github.com/krystal/katapult-php/commit/85ef77c7691440ee72286ca46a29a1b1a5852a35))
* **docs:** link to branches ([d2a5596](https://github.com/krystal/katapult-php/commit/d2a55968f0d34d9f816ab5fab80f54bb7ff20cf1))

## [3.0.0](https://github.com/krystal/katapult-php/compare/v2.3.0...v3.0.0) (2024-01-19)


### ⚠ BREAKING CHANGES

* **openapi:** v3

### Features

* **openapi:** v3 ([b9f90bf](https://github.com/krystal/katapult-php/commit/b9f90bf697ae941b8dc9f756ce8ff2a8b39c5ada))


### Miscellaneous Chores

* **CI:** specify all 3 release branches for release-please ([a33d1b2](https://github.com/krystal/katapult-php/commit/a33d1b27ccdc4e1f61692a28298c07710751ebf4))
* **CI:** update target branch ([a450cc9](https://github.com/krystal/katapult-php/commit/a450cc9596c99393d1249a2f5d3ccca372afdc71))
* **docs:** provide usage example ([d2751bd](https://github.com/krystal/katapult-php/commit/d2751bd377000e1a1289d555fb0932083707d7b6))
* **release-please:** add v3 to targeted branches ([a3a39d9](https://github.com/krystal/katapult-php/commit/a3a39d9552dce302b1dc0c55ac06969e666ede26))
* **release-please:** update to newest GHA release-please version ([72db4de](https://github.com/krystal/katapult-php/commit/72db4de16985319433b43f81a9fda837e75e73d5))
* **release-please:** versioning ([b861b71](https://github.com/krystal/katapult-php/commit/b861b7186425c83f881cdfb59f067a4549590e12))

## [2.3.0](https://github.com/krystal/katapult-php/compare/v2.2.0...v2.3.0) (2023-05-19)


### Features

* Add disk backup policy resource ([7f280a2](https://github.com/krystal/katapult-php/commit/7f280a279fb29410eb629b40fabda527e642d5f6))
