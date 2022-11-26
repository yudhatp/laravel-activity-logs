<?php

namespace Yudhatp\ActivityLogs;

use Illuminate\Support\ServiceProvider;

class ActivityLogsServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
