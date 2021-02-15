# simple-php-whois
🐘 Simple PHP library for performing WHOIS lookups and viewing domain information

![GitHub Workflow Status](https://img.shields.io/github/workflow/status/exler/simple-php-whois/Tests?label=build)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/exler/simple-php-whois)
![GitHub License](https://img.shields.io/github/license/exler/simple-php-whois)

## Installation

### Requirements

* PHP >= 7.2

### Install through Composer

```bash
$ composer require exler/simple-php-whois
```

## Usage

```php
<?php

use Exler\Whois\Whois;

// Create instance of the Whois class
$whois = new Whois;

// Get the raw domain information
$response = $whois->lookup("example.com");

// Check if the domain is available
$available = $whois->isAvailable("example.com");
```

## License

Copyright (c) 2021 by ***Kamil Marut***

`simple-php-whois` is under the terms of the [MIT License](https://www.tldrlegal.com/l/mit), following all clarifications stated in the [license file](LICENSE).

