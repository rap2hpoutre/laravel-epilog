# Epilog for Laravel 5

## What?

Power up logs. Add client context (IP, referer, user ID and more). Notify on slack on production error.

## Install

Install
-------
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
