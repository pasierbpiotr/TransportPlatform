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

    public function editForwarder(string $id) {
        $forwarder = Forwarder::findOrFail($id);
        $companies = Company::all();
        return view('admin.edit-forwarder', compact('forwarder','companies'));
    }

    public function showTransportsForw() {
        $userId = Auth::user()->id;
        $forwarder = Forwarder::where('user_id',$userId)->first();
        return view('forwarder.forwarder-transports', ['forwarder'=>$forwarder]);
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
