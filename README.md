# Laravel Activity Logs

Simple Activity Log for Laravel

## Installation

You can install the package via composer:

```bash
composer require yudhatp/laravel-activity-log
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
