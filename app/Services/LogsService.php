<?php
namespace App\Services;

use App\Models\RequestLog;

class LogsService
{
    public function getAnalytics()
    {
        $analytics = [
            'total_requests' => RequestLog::count(),
            'total_requests_today' => RequestLog::where('day', date('d-m-Y'))->count(),
            'total_requests_this_hour' => RequestLog::where('hour', date('H'))->count(),
            'total_requests_this_day' => RequestLog::where('day', date('d-m-Y'))->count(),
            'total_requests_this_month' => RequestLog::where('day', date('m-Y'))->count(),
            'total_requests_this_year' => RequestLog::where('day', date('Y'))->count(),
            'total_requests_this_week' => RequestLog::where('day', date('W-Y'))->count(),
        ];

        return $analytics;
    }
}


