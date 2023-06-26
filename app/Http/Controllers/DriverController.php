<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Forwarder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function adminViewDriversPage() {
        $drivers = Driver::paginate(10);
        $forwarders = Forwarder::all();
        return view('admin.view-drivers', compact('drivers','forwarders'));
    }

    public function forwarderViewDriversPage() {
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
        $forwarders = Forwarder::all();
        return view('admin.edit-driver', compact('driver','forwarders'));
    }

    public function editDriverForwarder(string $id) {
        $driver = Driver::findOrFail($id);
        return view('forwarder.forwarder-driver-edit', ['driver'=>$driver]);
    }

    public function updateDriver(Request $request, string $id) {
        $driver = Driver::findOrFail($id);
        $input = $request->all();
        $driver->fill($input)->save();
        return redirect()->route('view_drivers')->with('update', 'Driver edited.');
    }

    public function updateDriverForwarder(Request $request, string $id) {
        $driver = Driver::findOrFail($id);
        $input = $request->all();
        $driver->fill($input)->save();
        return redirect()->route('show_drivers')->with('update', 'Driver edited.');
    }

    public function removeDriver(string $id) {
        $forwarder = Driver::findOrFail($id);
        $forwarder->delete();

        return redirect()->back()->with('delete', 'Driver removed.');
    }

    public function removeDriverForwarder(string $id) {
        $driver = Driver::findOrFail($id);
        $driver->transports()->detach();
        $driver->delete();

        return redirect()->back()->with('delete', 'Driver removed.');
    }

    public function showTransportsDriver() {
        $userId = Auth::user()->id;
        $driver = Driver::where('user_id',$userId)->first();
        return view('driver.driver-transport', ['driver'=>$driver]);
    }
}
