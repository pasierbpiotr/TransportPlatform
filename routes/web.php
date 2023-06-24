<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
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

Route::get('/welcome-page', [CompanyController::class, 'showPage'])->name('welcome_page');

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'loginPost'])->name('login_post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forwarder-view', function() {
    return view('forwarder/forwarder-view');
})->name('forwarder_view');

Route::get('/driver-view', function() {
    return view('driver/driver-view');
})->name('driver_view');

Route::get('/admin-view', function() {
    return view('admin/admin-view');
})->name('admin_view');
