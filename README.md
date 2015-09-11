# Epilog for Laravel 5
[![Packagist](https://img.shields.io/packagist/l/rap2hpoutre/laravel-epilog.svg)](https://packagist.org/packages/rap2hpoutre/laravel-epilog) [![Packagist](https://img.shields.io/packagist/v/rap2hpoutre/laravel-epilog.svg)](https://packagist.org/packages/rap2hpoutre/laravel-epilog) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rap2hpoutre/laravel-epilog/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rap2hpoutre/laravel-epilog/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/rap2hpoutre/laravel-epilog/badges/build.png?b=master)](https://scrutinizer-ci.com/g/rap2hpoutre/laravel-epilog/build-status/master) [![SensioLabs Insight](https://insight.sensiolabs.com/projects/ad260efc-ca58-4521-9999-daadf92706d5/mini.png)]()
## What?

Power up logs. Add client context (IP, referer, user ID and more). Notify on slack on production error.

## Install

Install via composer
```
composer require rap2hpoutre/laravel-epilog
```

Add Service Provider to `config/app.php` in `providers` section
```php
Rap2hpoutre\LaravelEpilog\LaravelEpilogServiceProvider::class,
```

(optional) Publish configuration in order to use Slack alerts
```php
php artisan vendor:publish
```

Call `Log::info('hello world')` or whatever you want and go to see your logs.
