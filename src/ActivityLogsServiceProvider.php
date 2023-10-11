<?php

namespace Yudhatp\ActivityLogs;

use Illuminate\Support\ServiceProvider;

class ActivityLogsServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->publishes([
            __DIR__ . '/../config/activitylogs.php' => config_path('activitylogs.php'),
        ], 'yudhatp-activity-logs-config');
    }
}
