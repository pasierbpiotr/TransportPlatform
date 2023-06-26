<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ForwarderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransportController;
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

Route::get('/welcome-page', [CompanyController::class, 'startPage'])->name('welcome_page');

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::get('/register', [AuthController::class,'registration'])->name('register');
Route::get('/register/driver', [AuthController::class,'registerDriver'])->name('register_driver');
Route::get('/register/forwarder', [AuthController::class,'registerForwarder'])->name('register_forwarder');
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

Route::get('/admin-view/view-users', [UserController::class, 'viewUserPage'])->name('view_users');
Route::get('/admin-view/view-users/{id}/edit', [UserController::class, 'editUser'])->name('edit_user');
Route::patch('/admin-view/view-users/{id}', [UserController::class, 'updateUser'])->name('update_user');

Route::get('/admin-view/view-forwarders', [ForwarderController::class, 'viewForwardersPage'])->name('view_forwarders');
Route::get('/admin-view/view-forwarders/{id}/edit', [ForwarderController::class, 'editForwarder'])->name('edit_forwarder');
Route::patch('/admin-view/view-forwarders/{id}', [ForwarderController::class, 'updateForwarder'])->name('update_forwarder');
Route::delete('/admin-view/view-forwarders/{id}', [ForwarderController::class, 'removeForwarder'])->name('remove_forwarder');

Route::get('/admin-view/view-drivers', [DriverController::class, 'adminViewDriversPage'])->name('view_drivers');
Route::get('/admin-view/view-drivers/{id}/edit', [DriverController::class, 'editDriver'])->name('edit_driver');
Route::patch('/admin-view/view-drivers/{id}', [DriverController::class, 'updateDriver'])->name('update_driver');
Route::delete('/admin-view/view-drivers/{id}', [DriverController::class, 'removeDriver'])->name('remove_driver');

Route::get('/forwarder-view/drivers', [DriverController::class, 'forwarderViewDriversPage'])->name('show_drivers');
Route::get('/forwarder-view/drivers/{id}/edit', [DriverController::class, 'editDriverForwarder'])->name('edit_driver_forw');
Route::patch('/forwarder-view/drivers/{id}', [DriverController::class, 'updateDriverForwarder'])->name('update_driver_forw');
Route::delete('/forwarder-view/drivers/{id}', [DriverController::class, 'removeDriverForwarder'])->name('remove_driver_forw');

Route::get('/forwarder-view/transports', [ForwarderController::class, 'showTransportsForw'])->name('forwarder_show_trans');
Route::get('/forwarder-view/transports/{id}/edit', [TransportController::class, 'editTransport'])->name('edit_transport_forw');
Route::patch('/forwarder-view/transports/{id}', [TransportController::class, 'updateTransport'])->name('update_transport_forw');
Route::delete('/forwarder-view/transports/{id}', [TransportController::class, 'removeTransport'])->name('remove_transport_forw');

Route::get('/driver-view/transports', [DriverController::class, 'showTransportsDriver'])->name('driver_show_trans');
