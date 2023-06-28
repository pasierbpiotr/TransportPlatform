<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Forwarder;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransportController extends Controller
{
    public function editTransport(string $id) {
        $transport = Transport::findOrFail($id);
        $driver = Driver::all();
        $userId = Auth::user()->id;
        $forwarder = Forwarder::where('user_id',$userId)->first();
        return view('forwarder.forwarder-transport-edit', compact('transport','driver','forwarder'));
    }

    public function updateTransport(Request $request, string $id) {
    $transport = Transport::findOrFail($id);

    $validatedData = $request->validate([
        'driver_id' => 'required|exists:drivers,id',
        'starting_place' => 'required|string|max:40',
        'finishing_place' => 'required|string|max:40',
        'merchandise' => 'required|string|max:40',
        'mass' => 'required|numeric',
        'transport_date' => 'required|date',
    ]);

    if (isset($validatedData['driver_id'])) {
        $driverId = $validatedData['driver_id'];
        $transport->driver()->sync([$driverId]);
    }

    $transport->fill($validatedData)->save();
    return redirect()->route('forwarder_show_trans')->with('update', 'Transport edited.');
    }

    public function removeTransport(string $id) {
        $transport = Transport::findOrFail($id);
        $transport->driver()->detach();
        $transport->delete();

        return redirect()->back()->with('delete', 'Transport removed.');
    }
}
