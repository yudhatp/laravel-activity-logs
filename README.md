# Laravel Activity Logs

Simple and Usefull Activity Log for Laravel.

## Installation

You can install the package via composer:

```bash
composer require yudhatp/laravel-activity-logs
```

You can publish and run the migrations with:

```bash
php artisan migrate
```

You can publish config file with:

```bash
php artisan vendor:publish --tag=yudhatp-activity-logs-config
```

## Usage

### Auto Logging
on "kernel.php", add this line on your "protected $middlewareGroups"
```php
'web' => [
    ...
    \Yudhatp\ActivityLogs\Middleware\ActivityLogMiddleware::class,
    ...
],
```

in the config file, you can determine what data will be stored in "user_id". at default, the data that will be stored is the "id" field but you can manually change this at "user" data. for example : 
```php
'user' => 'employee_id'
```


### Manual Logging
on your controller, write this code :
```php
use Yudhatp\ActivityLogs\ActivityLogs;
ActivityLogs::log(auth()->user()->id, $request->ip(), 'Profile', 'View/Edit Profile');
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
