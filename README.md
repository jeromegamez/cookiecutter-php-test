# My Library

A library that does awesome things

<!--
[![Current version](https://img.shields.io/packagist/v/jeromegamez/my-library.svg?logo=composer)](https://packagist.org/packages/jeromegamez/my-library)
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/jeromegamez/my-library)](https://packagist.org/packages/jeromegamez/my-library)
[![Monthly Downloads](https://img.shields.io/packagist/dm/jeromegamez/my-library.svg)](https://packagist.org/packages/jeromegamez/my-library/stats)
[![Total Downloads](https://img.shields.io/packagist/dt/jeromegamez/my-library.svg)](https://packagist.org/packages/jeromegamez/my-library/stats)
[![CI](https://github.com/jeromegamez/my-library/actions/workflows/ci.yml/badge.svg)](https://github.com/jeromegamez/my-library/actions/workflows/ci.yml)
-->

## Installation

```shell
composer require jeromegamez/my-library
```

## Running checks

```shell
composer setup
composer test:all
```

All lint/check/test/bootstrap scripts are Composer scripts.
`composer setup` installs PHAR tools with Phive, installs `tools/.phpstan` and `tools/.rector` dependencies, and creates `tools/phpunit.phar` and `tools/phpstan` symlinks.

The full check suite includes:

- PHPUnit tests
- PHPStan static analysis
- Composer Dependency Analyser checks
- Composer Require Checker checks
- Composer Normalize check
- Backward Compatibility check
- Rector dry-run
- PHP CS Fixer check

To run only linting tools (Rector + PHP CS Fixer + Composer Normalize):

```shell
composer lint
```

To apply automatic lint fixes:

```shell
composer lint:fix
```

To run only Composer manifest normalization checks:

```shell
composer lint:composer
composer lint:composer:fix
```

To run dependency boundary checks directly:

```shell
composer test:dependencies
composer test:require-checker
```

To run the backward-compatibility check (recommended after fetching tags):

```shell
composer test:bc
```

`test:bc` runs the check in Docker (`nyholm/roave-bc-check`), so Docker must be available.

To run mutation testing:

```shell
composer test:mutation
```

## CI coverage

The `code-coverage` job in `.github/workflows/ci.yml`:

- Caches PHPUnit's static analysis cache
- Warms the coverage cache
- Collects `build/test-results.xml` and `build/code-coverage.xml`

Optional Codecov upload steps are included in `.github/workflows/ci.yml` but commented out.
To enable Codecov:

1. Uncomment the two `Upload ... to Codecov.io` steps in `.github/workflows/ci.yml`
2. Add a `CODECOV_TOKEN` repository secret
