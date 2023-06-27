<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Forwarder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function showTransports() {
        $userId = Auth::user()->id;
        $driver = Driver::where('user_id',$userId)->first();
        return view('driver.driver-transport', ['driver'=>$driver]);
    }
}
