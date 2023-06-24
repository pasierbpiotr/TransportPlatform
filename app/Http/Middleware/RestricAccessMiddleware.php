<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RestricAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            if($request->routeIs('admin_view')) {
                if(!Auth::check() || Auth::user()->type_id !== 1) {
                    abort(403, 'Unauthorized access.');
                }
            }
            elseif($request->routeIs('forwarder_view')) {
                if(!Auth::check() || Auth::user()->type_id !== 2) {
                    abort(403, 'Unauthorized access.');
                }
            }
            elseif($request->routeIs('driver_view')) {
                if(!Auth::check() || Auth::user()->type_id !== 3) {
                    abort(403, 'Unauthorized access.');
                }
            }
            elseif($request->routeIs('login')) {
                if(Auth::check()) {
                    abort(403,'Unauthorized access.');
                }
            }
        return $next($request);
    }
}
