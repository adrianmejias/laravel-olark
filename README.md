# Laravel Olark

[![security](https://github.com/adrianmejias/laravel-olark/actions/workflows/security.yml/badge.svg)](https://github.com/adrianmejias/laravel-olark/actions/workflows/security.yml) [![tests](https://github.com/adrianmejias/laravel-olark/actions/workflows/tests.yml/badge.svg)](https://github.com/adrianmejias/laravel-olark/actions/workflows/tests.yml) [![PHPStan](https://github.com/adrianmejias/laravel-olark/actions/workflows/phpstan.yml/badge.svg)](https://github.com/adrianmejias/laravel-olark/actions/workflows/phpstan.yml) [![PHP CS Fixer](https://github.com/adrianmejias/laravel-olark/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/adrianmejias/laravel-olark/actions/workflows/php-cs-fixer.yml) [![StyleCI](https://github.styleci.io/repos/446770602/shield?branch=main)](https://github.styleci.io/repos/446770602?branch=main) [![Build Status](https://travis-ci.com/adrianmejias/laravel-olark.svg?branch=main)](https://travis-ci.com/adrianmejias/laravel-olark) [![codecov](https://codecov.io/gh/adrianmejias/laravel-olark/branch/main/graph/badge.svg?token=7TCWYB1YV6)](https://codecov.io/gh/adrianmejias/laravel-olark) ![Downloads](https://img.shields.io/packagist/dt/adrianmejias/laravel-olark) ![Packagist](https://img.shields.io/packagist/v/adrianmejias/laravel-olark) [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT) ![Liberapay](https://img.shields.io/liberapay/patrons/adrianmejias.svg?logo=liberapay)

Laravel Olark is a [Laravel](https://laravel.com/) package that allows you to integrate the [Olark](https://www.olark.com/) chatbot into your Laravel application.

## Installation

This version supports `PHP 8.0 or 8.1`. You can install the package via composer:

`composer require adrianmejias/laravel-olark`

## Usage

### Example

```blade
<html>
    <head></head>
    <body>
        <div>
            My Webiste
        </div>
        @olarkWidget()
    </body>
</html>
```

## Testing

`composer test`

## Contributing

Thank you for considering contributing to Laravel Routing Numbers! You can read the contribution guide [here](.github/CONTRIBUTING.md).

## Code of Conduct

In order to ensure that the community is welcoming to all, please review and abide by the [Code of Conduct](.github/CODE_OF_CONDUCT.md).

## Security Vulnerabilities

Please see the [security file](SECURITY.md) for more information.

## License

The MIT License (MIT). Please see the [license file](LICENSE.md) for more information.
