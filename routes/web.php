<?php

use App\Http\Controllers\Welcome_Page;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Welcome_Page', function() {
    return view('Welcome_Page');
})->name('start');

Route::get('/Login', function() {
    return view('Login');
})->name('login');
