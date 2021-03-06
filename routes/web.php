<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{ PermissionController, RoleController };

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('content');
});
Route::get('payments', function () {
    return view('pages.payments');
});
Route::get('details_payments/{id}', function () {
    return view('pages.details_payments');
});
Route::get('to_pay', function () {
    return view('pages.to_pay');
});
Route::get('account_status', function () {
    return view('pages.account_status');
});
Route::get('wallet', function () {
    return view('pages.wallet');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['role:Administrador']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});
