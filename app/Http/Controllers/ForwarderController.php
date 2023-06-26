<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Forwarder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForwarderController extends Controller
{
    public function viewForwardersPage() {
        $forwarders = Forwarder::paginate(10);
        $companies = Company::all();
        return view('admin.view-forwarders', compact('forwarders','companies'));
    }

    public function forwarderViewDriversPage() {
        $forwarder = Auth::user()->forwarder;
        $drivers = $forwarder->drivers;
        return view('forwarder.forwarder-drivers', ['drivers'=>$drivers]);
    }

    public function editForwarder(string $id) {
        $forwarder = Forwarder::findOrFail($id);
        return view('admin.edit-forwarder', ['forwarder'=>$forwarder]);
    }

    public function updateForwarder(Request $request, string $id) {
        $forwarder = Forwarder::findOrFail($id);
        $input = $request->all();
        $forwarder->fill($input)->save();
        return redirect()->route('view_forwarders')->with('update', 'Forwarder edited.');
    }

    public function removeForwarder(string $id) {
        $forwarder = Forwarder::findOrFail($id);
        $forwarder->drivers()->delete();
        $forwarder->delete();

        return redirect()->back()->with('delete', 'Forwarder removed.');
    }
}
