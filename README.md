
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# This is my package laravel-model-metadata

[![Latest Version on Packagist](https://img.shields.io/packagist/v/finller/laravel-model-metadata.svg?style=flat-square)](https://packagist.org/packages/finller/laravel-model-metadata)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/finller/laravel-model-metadata/run-tests?label=tests)](https://github.com/finller/laravel-model-metadata/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/finller/laravel-model-metadata/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/finller/laravel-model-metadata/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/finller/laravel-model-metadata.svg?style=flat-square)](https://packagist.org/packages/finller/laravel-model-metadata)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require finller/laravel-model-metadata
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="model-metadata-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="model-metadata-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-model-metadata-views"
```

## Usage

```php
$metadata = new Finller\Metadata();
echo $metadata->echoPhrase('Hello, Finller!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/quentinGab/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Quentin Gabriele](https://github.com/quentinGab)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
