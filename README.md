<p align="center"><img src="./katapult_logo.svg" alt="Katapult logo" width="40%" /></p>

---

[![Latest Version on Packagist](https://img.shields.io/packagist/v/krystal/katapult.svg?style=flat-square)](https://packagist.org/packages/krystal/katapult)
[![Total Downloads](https://img.shields.io/packagist/dt/krystal/katapult.svg?style=flat-square)](https://packagist.org/packages/krystal/katapult)

A PHP library for integrating with [Katapult](https://katapult.io/).

You can find all the Katapult Developer Docs [here](https://developers.katapult.io/).

## Version constraints
* [v1.x](https://github.com/krystal/katapult-php/tree/1.x) supports PHP 5.6
* [v2.x](https://github.com/krystal/katapult-php/tree/2.x) supports PHP 7.4

From version 3, we switched to an OpenAPI based generator.

Versions 3 and up require a minimum of PHP 8.1 and follow semantic versioning.

Please refer to `composer.json` for any specific language requirements for your version.

## Installation

You can install the package via Composer:

```bash
composer require krystal/katapult
```

## Usage

It will use PSR HTTP discovery to locate an imlpementation of the PSR ClientInterface.

If you need control over this, you can call `setHttpClient` in `ClientFactory`.

The usage sample below emits the IPv4 and IPv6 addresses for each VM in your Organization.

```php
use Krystal\Katapult\KatapultAPI\ClientFactory;

$katapult = (new ClientFactory('your-katapult-api-token'))->create();

$virtualMachines = $katapult->getOrganizationVirtualMachines([
    'organization[id]' => 'your-katapult-org-id',
])->getVirtualMachines();

foreach ($virtualMachines as $virtualMachine) {
    echo $virtualMachine->getHostname() . PHP_EOL;
    foreach ($virtualMachine->getIpAddresses() as $ipAddress) {
        $prefix = filter_var($ipAddress->getAddress(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) ? 'ipv4' : 'ipv6';
        echo '  ' . $prefix . ': ' . $ipAddress->getAddress() . PHP_EOL;
    }
}
```

Output

```
example
  ipv4: 93.184.216.34
  ipv6: 2606:2800:220:1:248:1893:25c8:1946
```
