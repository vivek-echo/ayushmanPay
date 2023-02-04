<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', [App\Http\Controllers\Home\HomePageController::class, 'index']);
Route::get('/getState', [App\Http\Controllers\CommonController::class, 'getState']);
Route::match(['GET', 'POST'], '/vialidateOtpPage', [App\Http\Controllers\Auth\OtpController::class, 'vialidateOtpPage']);
Route::match(['GET', 'POST'], '/viewOtpPage', [App\Http\Controllers\Auth\OtpController::class, 'viewOtpPage']);
Route::match(['GET', 'POST'], '/validateOtp', [App\Http\Controllers\Auth\OtpController::class, 'validateOtp']);
Route::match(['GET', 'POST'], '/createAccount', [App\Http\Controllers\Auth\OtpController::class, 'index']);
Route::group(['middleware' => 'auth'], function () {
    Route::match(['GET', 'POST'], '/dashboard', [App\Http\Controllers\InnerPannel\Dashboard\DashboardController::class, 'index'])->middleware('auth');
    Route::match(['GET', 'POST'], '/services', [App\Http\Controllers\InnerPannel\Services\ServicesController::class, 'index'])->middleware('auth');
    Route::match(['GET', 'POST'], '/wallet', [App\Http\Controllers\Wallet\WalletController::class, 'index'])->middleware('auth');
    Route::match(['GET', 'POST'], '/Wallet/UpdateWallet', [App\Http\Controllers\Wallet\WalletController::class, 'updateWallet'])->middleware('auth');
});
