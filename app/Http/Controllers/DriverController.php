<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Forwarder;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function adminViewDriversPage() {
        $drivers = Driver::paginate(10);
        $forwarders = Forwarder::all();
        return view('admin.view-drivers', compact('drivers','forwarders'));
    }

    public function editDriver(string $id) {
        $driver = Driver::findOrFail($id);
        return view('admin.edit-driver', ['driver'=>$driver]);
    }

    public function updateDriver(Request $request, string $id) {
        $driver = Driver::findOrFail($id);
        $input = $request->all();
        $driver->fill($input)->save();
        return redirect()->route('view_drivers')->with('update', 'Driver edited.');
    }

    public function removeDriver(string $id) {
        $forwarder = Driver::findOrFail($id);
        $forwarder->delete();

        return redirect()->back()->with('delete', 'Driver removed.');
    }
}
