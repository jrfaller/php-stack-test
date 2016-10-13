# PHP Tool Stack Test [![Build Status](https://travis-ci.org/jrfaller/php-stack-test.svg?branch=master)]

This repository is a showcase to demonstrate how to build a full tool stack for PHP. The following tools are used:

## Components

* [composer](https://getcomposer.org/) for dependency management
* [phing](https://www.phing.info/) for task execution
* [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) as a linter
* [PHPUnit](https://phpunit.de/) for unit tests
* [travis-ci](https://travis-ci.org/) for continuous integration
* [phploc](https://github.com/sebastianbergmann/phploc) for software metrics

## installation

Just clone the repository and run the following commands (requires PHP >= 5.3)

```
php composer.phar install
vendor/bin/phing docs
vendor/bin/phing reports
vendor/bin/phing check
vendor/bin/phing
```
