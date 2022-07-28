<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\RequestLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class RequestLogger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if($request->routeIs('admin.analytics')) {
            return $response;
        }else if($request->routeIs('login')){
            return $response;
        }else if($request->routeIs('admin.*')){
            return $response;
        }else if($request->method() == 'POST'){
            return $response;
        }

        $requestTime = Carbon::createFromTimestamp($_SERVER['REQUEST_TIME']);
        $request = RequestLog::create([
            'url' => Route::current()->getName(),
            'method' => $request->method(),
            'response_time' => $requestTime->timestamp,
            'day' => date('d-m-Y'),
            'hour' => $requestTime->hour
        ]);

        return $response;
    }
}
