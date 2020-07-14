<p align="center"><img src="./katapult_logo.svg" alt="Katapult logo" width="40%" /></p>

---

[![Latest Version on Packagist](https://img.shields.io/packagist/v/krystal/katapult.svg?style=flat-square)](https://packagist.org/packages/krystal/katapult)
[![Total Downloads](https://img.shields.io/packagist/dt/krystal/katapult.svg?style=flat-square)](https://packagist.org/packages/krystal/katapult)

PHP library for integrating with [Katapult](https://katapult.io/)

## Version constraints
* V1.x supports PHP 5.6
* V2.x supports PHP 7.3 (not released)

## Installation

You can install the package via composer:

```bash
composer require krystal/katapult
```

## Usage

``` php
use Krystal\Katapult\Katapult;
use Krystal\Katapult\Resources\Organization;
use Krystal\Katapult\API\RestfulKatapultApiV1;

// Instantiate Katapult
$useProductionApi = true;
$katapultApi = (new RestfulKatapultApiV1($useProductionApi))->setAuthenticationToken('your-api-token');
$katapult = Katapult::make($katapultApi);

// Fetch organizations, and grab the first one
$firstOrganization = $katapult->resource(Organization::class)->all()[0];

// Make the request
$response = $katapult->resource(Organization\VirtualMachine::class, $firstOrganization)->build([
    'package' => ['id' => 'vmpkg_B66yYQl0e3UNTCEa'], // Change as suitable, or fetch from the API
    'data_center' => ['id' => 'loc_gTvEnqqnKohbFBJR'] // As above
]);
```

### Testing

``` bash
KATAPULT_API_TOKEN=<your-token-here> composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email contact@krystal.uk instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com).
