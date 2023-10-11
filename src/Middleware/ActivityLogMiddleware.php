<?php

namespace Yudhatp\ActivityLogs\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Yudhatp\ActivityLogs\ActivityLogs;

class ActivityLogMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $except = config('activitylogs.except-routes', []);
        $userID = config('activitylogs.user', 'id');

        foreach ($except as $excluded_route) {
            if ($request->path() === $excluded_route) {
                return  $next($request);
            }
        }

        $user = \Auth::user();
        if (empty($user)) {
            return $next($request);
        }

        //check if column exists on $user
        if (empty($user->getOriginal($userID))) {
            return $next($request);
        }

        ActivityLogs::log($user->getOriginal($userID), $request->ip(), $request->segment(1) ?? '', $request->method() .' - '.$request->url());
        return $next($request);
    }
}