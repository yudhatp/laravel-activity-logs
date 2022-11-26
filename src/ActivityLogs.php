<?php

namespace Yudhatp\ActivityLogs;

use Yudhatp\ActivityLogs\Models\ActivityLog;

class ActivityLogs
{
    public static function log($user_id, $ip, $module, $activity)
    {
        $data = [
            'user_id' => $user_id,
            'ip_address' => $ip,
            'module' => $module,
            'activity' => $activity,
        ];

        return ActivityLog::create($data);
    }
}
