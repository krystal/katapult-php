<p align="center"><img src="./katapult_logo.svg" alt="Katapult logo" width="40%" /></p>

---

[![Latest Version on Packagist](https://img.shields.io/packagist/v/krystal/katapult.svg?style=flat-square)](https://packagist.org/packages/krystal/katapult)
[![Total Downloads](https://img.shields.io/packagist/dt/krystal/katapult.svg?style=flat-square)](https://packagist.org/packages/krystal/katapult)

A PHP library for integrating with [Katapult](https://katapult.io/)

## Version constraints
* V1.x supports PHP 5.6
* V2.x supports PHP 7.4

## Installation

You can install the package via Composer:

```bash
composer require krystal/katapult
```

## Usage

```php
use Krystal\Katapult\API\RestfulKatapultApiV1 as KatapultApi;
use Krystal\Katapult\Katapult;
use Krystal\Katapult\Resources\DataCenter;
use Krystal\Katapult\Resources\Organization;
use Krystal\Katapult\Resources\VirtualMachinePackage;

$katapult = Katapult::make(new KatapultApi(
    'your-katapult-api-token'
));

$dataCenters = $katapult->resource(DataCenter::class)->all();
$organization = $katapult->resource(Organization::class)->first();
$virtualMachinePackages = $katapult->resource(VirtualMachinePackage::class)->all();
$virtualMachines = $katapult->resource(Organization\VirtualMachine::class, $organization)->all();
```

### Guzzle handler stack
You can inject your own handler stack for Guzzle, which is usually done for adding middleware, such as logging requests.

```php
use Krystal\Katapult\API\RestfulKatapultApiV1 as KatapultApi;
use Krystal\Katapult\Katapult;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use \Psr\Http\Message\ResponseInterface;

// Create a handler stack
$handlerStack = HandlerStack::create();

// Add some middleware
$handlerStack->push(Middleware::mapRequest(function(RequestInterface $request) {
    return $request;
}));

// And some more
$handlerStack->push(Middleware::mapResponse(function(ResponseInterface $response) {
    return $response;
}));

// Use the handler stack directly on the constructor
$katapult = Katapult::make(
    new KatapultApi('your-katapult-api-token', true, $handlerStack)
);

// Or by rebuilding the Guzzle client
$katapult = Katapult::make(
    (new KatapultApi('your-katapult-api-token'))
        ->rebuildClient($handlerStack)
);
```

## Testing

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
