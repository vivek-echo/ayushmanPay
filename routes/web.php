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
    Route::match(['GET', 'POST'], '/dashboard', [App\Http\Controllers\InnerPannel\Dashboard\DashboardController::class, 'index']);
    Route::match(['GET', 'POST'], '/services', [App\Http\Controllers\InnerPannel\Services\ServicesController::class, 'index']);
    Route::match(['GET', 'POST'], '/services/b2bServices/mobileRechare', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MobileRechargeServicesController::class, 'index']);
    Route::match(['GET', 'POST'], '/wallet', [App\Http\Controllers\Wallet\WalletController::class, 'index']);
    Route::match(['GET', 'POST'], '/Wallet/UpdateWallet', [App\Http\Controllers\Wallet\WalletController::class, 'updateWallet']);
    Route::match(['GET', 'POST'], '/getPerpaidOperatorList', [App\Http\Controllers\CommonController::class, 'getPrepaidOperatorList']);
    Route::match(['GET', 'POST'], '/getPerpaidOperatorPlan', [App\Http\Controllers\CommonController::class, 'getPerpaidOperatorPlan']);
});
Route::get('/services/fastTag', function(){
    return view('InnerPannel/Services/BtwoBServices/FastTagService');
});
Route::get('/services/emiBill', function(){
    return view('InnerPannel/Services/BtwoBServices/EmiBillService');
});
Route::get('/services/hospital', function(){
    return view('InnerPannel/Services/BtwoBServices/HospitalService');
});
Route::get('/services/broadband', function(){
    return view('InnerPannel/Services/BtwoBServices/BroadbandService');
});