<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
