<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Driver;
use App\Models\Forwarder;
use App\Models\Transport;
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

    public function addTransport() {
        $userId = Auth::user()->id;
        $forwarder = Forwarder::where('user_id',$userId)->first();
        $drivers = $forwarder->drivers;
        return view('forwarder.forwarder-transport-add', compact('drivers'));

    }

    public function createTransport(Request $request) {
        $validatedData = $request->validate([
            'driver_id' => 'required|exists:drivers,id',
            'starting_place' => 'required|string|max:40',
            'finishing_place' => 'required|string|max:40',
            'merchandise' => 'required|string|max:40',
            'mass' => 'required|numeric',
            'transport_date' => 'required|date|after_or_equal:today',
        ]);

        $transport = new Transport([
            'starting_place' => $validatedData['starting_place'],
            'finishing_place' => $validatedData['finishing_place'],
            'merchandise' => $validatedData['merchandise'],
            'mass' => $validatedData['mass'],
            'transport_date' => $validatedData['transport_date'],
        ]);

        $transport->save();
        $transport->driver()->attach($request->input('driver_id'));

        return redirect()->route('forwarder_show_trans')->with('success', 'Transport added successfully.');
    }
}
