# Comando para crear una tabla con los datos de departamentos y localidades de Uruguay

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abr4xas/uruguay-noma.svg?style=flat-square)](https://packagist.org/packages/abr4xas/uruguay-noma)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/abr4xas/uruguay-noma/run-tests.yml?branch=master&label=tests&style=flat-square)](https://github.com/abr4xas/uruguay-noma/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/abr4xas/uruguay-noma/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/abr4xas/uruguay-noma/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/abr4xas/uruguay-noma.svg?style=flat-square)](https://packagist.org/packages/abr4xas/uruguay-noma)

Comando para crear una tabla con los datos de departamentos y localidades de Uruguay

## Installation

You can install the package via composer:

```bash
composer require abr4xas/uruguay-noma
```

You can publish the csv using

```bash
php artisan vendor:publish --tag="uruguay-noma-csv"
```

## Usage

simplemente ejecuta este comando:

```bash
php artisan uruguay-noma
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [angel cruz](https://github.com/abr4xas)
- [Martin M.](https://github.com/skydiver)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
