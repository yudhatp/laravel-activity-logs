# Laravel Activity Logs

Simple Activity Log for Laravel 6.x, 7.x, 8.x, 9.x, 10,x.

## Installation

You can install the package via composer:

```bash
composer require yudhatp/laravel-activity-logs
```

You can publish and run the migrations with:

```bash
php artisan migrate
```

## Usage

```php
use Yudhatp\ActivityLogs\ActivityLogs;
ActivityLogs::log(auth()->user()->id, $request->ip(), 'Profile', 'View/Edit Profile');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
