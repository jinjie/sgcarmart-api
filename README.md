# sgCarMart API

A simple PHP library to get dealer listings

[See API Docs](https://jinjie.github.io/sgcarmart-api)

## Install

`composer install jinjie/sgcarmart-api`

## Usage

```php
$sgCarMart = new \SwiftDevLabs\SgCarMart\SgCarMart('username');

// Get Listings
$listings = $sgCarMart->getListings();

// Get Listing Detail
$car = $sgCarMart->getDetail($car_id);
```

## Author

Author: Kong Jin Jie

Website: [https://www.swiftdev.sg](https://www.swiftdev.sg)
