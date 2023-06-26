<?php

namespace App\Providers;

use App\Models\Driver;
use App\Models\Forwarder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class HeaderNameServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        view()->composer('include.header', function($view) {

            $user = Auth::user();
            $fullName = '';

            if($user && $user->type_id == 1) {
                $fullName = 'admin';
            }
            elseif($user && $user->type_id == 2) {
                $forwarder = Forwarder::where('user_id',$user->id)->first();
                if($forwarder) {
                    $fullName = $forwarder->name.' '.$forwarder->surname;
                }
            }
            elseif ($user && $user->type_id == 3) {
                $driver = Driver::where('user_id',$user->id)->first();
                if($driver) {
                    $fullName = $driver->name.' '.$driver->surname;
                }
            }

            $view->with('fullName',$fullName);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
