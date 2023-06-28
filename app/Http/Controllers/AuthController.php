<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Driver;
use App\Models\Forwarder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login() {
        return view('login');
    }

    function registration() {
        return view('register');
    }

    function registrationDriver() {
        $forwarders = Forwarder::all();
        return view('register-driver', compact('forwarders'));
    }

    function registrationForwarder() {
        $companies = Company::all();
        return view('register-forwarder', compact('companies'));
    }

    function registerDriver(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:30',
            'car' => 'required|string|max:30',
            'forwarder_id' => 'required|exists:forwarders,id',
            'login' => 'required|string|unique:users|max:30',
            'password' => 'required|confirmed|min:5|max:30',
        ]);

        $user = User::create([
            'login' => $validatedData['login'],
            'type_id' => 3,
            'password' => Hash::make($validatedData['password']),
        ]);

        $userID = $user->id;

        $driver = Driver::create([
            'name' => $validatedData['name'],
            'surname' => $validatedData['surname'],
            'car' => $validatedData['car'],
            'user_id' => $userID,
            'forwarder_id' => $validatedData['forwarder_id'],
        ]);

        return redirect()->route('login')->with('success','Registration successful, you may log in.');
    }

    function registerForwarder(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:30',
            'company_id' => 'required|exists:companies,id',
            'login' => 'required|string|unique:users|max:30',
            'password' => 'required|confirmed|min:5|max:30',
        ]);

        $user = User::create([
            'login' => $validatedData['login'],
            'type_id' => 2,
            'password' => Hash::make($validatedData['password']),
        ]);

        $userID = $user->id;

        $driver = Forwarder::create([
            'name' => $validatedData['name'],
            'surname' => $validatedData['surname'],
            'user_id' => $userID,
            'company_id' => $validatedData['company_id'],
        ]);

        return redirect()->route('login')->with('success','Registration successful, you may log in.');
    }


    function loginPost(Request $request) {

        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('login','password');

        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            if($user->type_id == 1) {
                return redirect()->route('admin_view');
            }
            elseif($user->type_id == 2) {
                return redirect()->route('forwarder_view');
            }
            elseif($user->type_id == 3) {
                return redirect()->route('driver_view');
            }
        }
        else {
            return redirect()->route('login')->with('error','Invalid credentials');
        }
    }

    function logout() {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out');
    }
}
