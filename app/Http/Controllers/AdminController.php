<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Driver;
use App\Models\Forwarder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function viewUsers() {
        $users = User::paginate(10);
        return view('admin.view-users', ['users'=>$users]);
    }

    public function editUser(string $id) {
        $user = User::findOrFail($id);
        return view('admin.edit-user', ['user'=>$user]);
    }

    public function updateUser(Request $request, string $id) {
        if($id == 1) {
            return redirect()->route('view_users')->with('error','Admin is not editable');
        }
        else {
            $user = User::findOrFail($id);
            $input = $request->all();

            if (isset($input['password'])) {
                $unhashed = $input['password'];
                $input['password'] = Hash::make($unhashed);
                $input['unhashed'] = $unhashed;
            }
            $user->fill($input)->save();
            return redirect()->route('view_users')->with('update', 'User edited.');
        }
    }

    public function viewForwarders() {
        $forwarders = Forwarder::paginate(10);
        $companies = Company::all();
        return view('admin.view-forwarders', compact('forwarders','companies'));
    }

    public function editForwarder(string $id) {
        $forwarder = Forwarder::findOrFail($id);
        $companies = Company::all();
        return view('admin.edit-forwarder', compact('forwarder','companies'));
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
        $user = $forwarder->user();
        $forwarder->delete();
        $user->delete();

        return redirect()->back()->with('delete', 'Forwarder removed.');
    }

    public function viewDrivers() {
        $drivers = Driver::paginate(10);
        $forwarders = Forwarder::all();
        return view('admin.view-drivers', compact('drivers','forwarders'));
    }

    public function editDriver(string $id) {
        $driver = Driver::findOrFail($id);
        $forwarders = Forwarder::all();
        return view('admin.edit-driver', compact('driver','forwarders'));
    }

    public function updateDriver(Request $request, string $id) {
        $driver = Driver::findOrFail($id);
        $input = $request->all();
        $driver->fill($input)->save();
        return redirect()->route('view_drivers')->with('update', 'Driver edited.');
    }

    public function removeDriver(string $id) {
        $driver = Driver::findOrFail($id);
        $driver->delete();
        $driver->user()->delete();

        return redirect()->back()->with('delete', 'Driver removed.');
    }
}
