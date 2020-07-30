### Comando para crear una tabla con los datos de departamentos y localidades de Uruguay

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abr4xas/uruguay-noma.svg?style=flat-square)](https://packagist.org/packages/abr4xas/uruguay-noma)
[![Total Downloads](https://img.shields.io/packagist/dt/abr4xas/uruguay-noma.svg?style=flat-square)](https://packagist.org/packages/abr4xas/uruguay-noma)



#### instalacion

usando composer

```bash
composer require abr4xas/uruguay-noma
```

publica las migraciones y los archivos necesarios:

```bash
php artisan vendor:publish --provider="Abr4xas\UruguayNoma\UruguayNomaServiceProvider" --tag="csv"
php artisan vendor:publish --provider="Abr4xas\UruguayNoma\UruguayNomaServiceProvider" --tag="models"
php artisan vendor:publish --provider="Abr4xas\UruguayNoma\UruguayNomaServiceProvider" --tag="migrations"
php artisan migrate
```

#### uso

simplemente ejecuta este comando:

```bash
php artisan uruguay-noma
```

#### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

#### Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

#### Credits

- [angel cruz](https://github.com/abr4xas)
- [Martin M.](https://github.com/skydiver)
- [All Contributors](../../contributors)


#### License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
