<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome_Page extends Controller
{
    public function index() {
        return view('Welcome_Page');
    }
}
