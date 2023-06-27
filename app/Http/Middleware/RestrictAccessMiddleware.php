<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RestrictAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            if($request->routeIs('admin_view') || $request->routeIs('view_users') || $request->routeIs('edit_user') || $request->routeIs('update_user') || $request->routeIs('view_forwarders') || $request->routeIs('edit_forwarder') || $request->routeIs('update_forwarder') || $request->routeIs('remove_forwarder') || $request->routeIs('view_drivers') || $request->routeIs('edit_driver') || $request->routeIs('update_driver') || $request->routeIs('remove_driver')) {
                if(!Auth::check() || Auth::user()->type_id !== 1) {
                    abort(403, 'Unauthorized access');
                }
            }
            elseif($request->routeIs('forwarder_view') || $request->routeIs('show_drivers') || $request->routeIs('edit_driver_forw') || $request->routeIs('update_driver_forw') || $request->routeIs('remove_driver_forw') || $request->routeIs('forwarder_show_trans') || $request->routeIs('edit_transport_forw') || $request->routeIs('update_transport_forw') || $request->routeIs('remove_transport_forw')) {
                if(!Auth::check() || Auth::user()->type_id !== 2) {
                    abort(403, 'Unauthorized access');
                }
            }
            elseif($request->routeIs('driver_view') || $request->routeIs('driver_show_trans')) {
                if(!Auth::check() || Auth::user()->type_id !== 3) {
                    abort(403, 'Unauthorized access');
                }
            }
            elseif($request->routeIs('login') || $request->routeIs('register') || $request->routeIs('registration_driver') || $request->routeIs('registration_forwarder') || $request->routeIs('login_post') || $request->routeIs('register_driver') || $request->routeIs('register_forwarder')) {
                if(Auth::check()) {
                    abort(403,'Unauthorized access');
                }
            }
        return $next($request);
    }
}
