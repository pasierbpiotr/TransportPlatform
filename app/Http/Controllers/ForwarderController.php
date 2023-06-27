<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Driver;
use App\Models\Forwarder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForwarderController extends Controller
{
    public function showTransports() {
        $userId = Auth::user()->id;
        $forwarder = Forwarder::where('user_id',$userId)->first();
        return view('forwarder.forwarder-transports', ['forwarder'=>$forwarder]);
    }

    public function viewDrivers() {
        $userId = Auth::user()->id;
        $forwarder = Forwarder::where('user_id',$userId)->first();


        if($forwarder) {
            $drivers = $forwarder->drivers;
            return view('forwarder.forwarder-drivers', ['drivers'=>$drivers]);
        }
        else {
            return redirect()->back()->with('error','Forwarder not found.');
        }
    }

    public function editDriver(string $id) {
        $driver = Driver::findOrFail($id);
        return view('forwarder.forwarder-driver-edit', ['driver'=>$driver]);
    }

    public function updateDriver(Request $request, string $id) {
        $driver = Driver::findOrFail($id);
        $input = $request->all();
        $driver->fill($input)->save();
        return redirect()->route('show_drivers')->with('update', 'Driver edited.');
    }

    public function removeDriver(string $id) {
        $driver = Driver::findOrFail($id);
        $driver->transports()->detach();
        $driver->delete();

        return redirect()->back()->with('delete', 'Driver removed.');
    }

}
