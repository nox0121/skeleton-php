# 簡介

本專案為樣板程式，參考自 [skeleton-php](https://github.com/spatie/skeleton-php)。

**注意:** 修改 [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) 等檔案內的欄位 ```:author_name``` ```:author_username``` ```:author_email``` ```:package_name``` ```:package_description```。

## Installation

You can install the package via composer:

```bash
composer require nox0121/:package_name
```

## Usage

``` php
$skeleton = new Nox0121\Skeleton();
echo $skeleton->echoPhrase('Hello World!');
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
