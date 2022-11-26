<?php

namespace Yudhatp\ActivityLogs\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    public $table = 'activity_logs';

    protected $fillable = [
        'user_id',
        'ip_address',
        'module',
        'activity',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
