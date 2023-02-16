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
    Route::match(['GET', 'POST'], '/submitRecharge', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MobileRechargeServicesController::class, 'submitRecharge']);
    Route::match(['GET', 'POST'], '/wallet', [App\Http\Controllers\Wallet\WalletController::class, 'index']);
    Route::match(['GET', 'POST'], '/Wallet/UpdateWallet', [App\Http\Controllers\Wallet\WalletController::class, 'updateWallet']);
    Route::match(['GET', 'POST'], '/getPerpaidOperatorList', [App\Http\Controllers\CommonController::class, 'getPrepaidOperatorList']);
    Route::match(['GET', 'POST'], '/getPerpaidOperatorPlan', [App\Http\Controllers\CommonController::class, 'getPerpaidOperatorPlan']);
    //common
    Route::match(['GET', 'POST'], '/profileData', [App\Http\Controllers\CommonController::class, 'profileData']);
    Route::match(['GET', 'POST'], '/getGstStateList', [App\Http\Controllers\CommonController::class, 'getGstStateList']);
    //fasttag
    Route::match(['GET', 'POST'], '/services/b2bServices/fasttag', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\FastTagServicesController::class, 'index']);
    Route::match(['GET', 'POST'], '/getFastTagOperatorList', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\FastTagServicesController::class, 'getFastTagOperatorList']);
    Route::match(['GET', 'POST'], '/getBillData', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\FastTagServicesController::class, 'fetchBill']);
    Route::match(['GET', 'POST'], '/payBillFastTag', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\FastTagServicesController::class, 'payBillFastTag']);
    //EMI bill
    Route::match(['GET', 'POST'], '/services/b2bServices/EmiBill', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\EmiBillServicesController::class, 'index']);
    Route::match(['GET', 'POST'], '/getBillOperatorList', [App\Http\Controllers\CommonController::class, 'getBillOperatorList']);
    Route::match(['GET', 'POST'], '/fetchEmiBill', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\EmiBillServicesController::class, 'fetchEmiBill']);
    Route::match(['GET', 'POST'], '/payEmiBill', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\EmiBillServicesController::class, 'payEmiBill']);
    //LPG
    Route::match(['GET', 'POST'], '/services/b2bServices/LPG', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\LPGServicesController::class, 'index']);
    Route::match(['GET', 'POST'], '/getLpgOperatorList', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\LPGServicesController::class, 'getLpgOperatorList']);
    Route::match(['GET', 'POST'], '/getLpgBillData', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\LPGServicesController::class, 'getLpgBillData']);
    Route::match(['GET', 'POST'], '/payLpgBill', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\LPGServicesController::class, 'payLpgBill']);
    //BroadBand
    Route::match(['GET', 'POST'], '/services/b2bServices/Broadband', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\BroadbandServicesController::class, 'index']);
    Route::match(['GET', 'POST'], '/fetchBroadbandBill', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\BroadbandServicesController::class, 'fetchBroadbandBill']);
    //Money Transfer
    Route::match(['GET', 'POST'], '/services/b2bServices/MoneyTransfer', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'index']);
    Route::match(['GET', 'POST'], '/getBankList', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'getBankList']);
    Route::match(['GET', 'POST'], '/submitRemiterRegister', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'submitRemiterRegister']);
    Route::match(['GET', 'POST'], '/addBenfeiciry', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'addBenfeiciry']);
    Route::match(['GET', 'POST'], '/deletebeneficiary', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'deletebeneficiary']);
    Route::match(['GET', 'POST'], '/fetchMoneyTransferDetails', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'fetchMoneyTransferDetails']);
    Route::match(['GET', 'POST'], '/getOtpMoneyTansfer', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'getOtpMoneyTansfer']);
});
//B2BService
Route::get('/services/hospital', function () {
    return view('InnerPannel/Services/BtwoBServices/HospitalService');
});
Route::get('/services/broadband', function () {
    return view('InnerPannel/Services/BtwoBServices/BroadbandService');
});
Route::get('/services/lifeinsurance', function () {
    return view('InnerPannel/Services/BtwoBServices/LifeInsuranceService');
});
Route::get('/services/LpgGasBooking', function () {
    return view('InnerPannel/Services/BtwoBServices/LpgGasBookingService');
});
Route::get('/services/PancardUTI', function () {
    return view('InnerPannel/Services/BtwoBServices/PanCardUTIService');
});
Route::get('/services/irctcservice', function () {
    return view('InnerPannel/Services/BtwoBServices/IrctcService');
});
Route::get('/services/fixeddepositservice', function () {
    return view('InnerPannel/Services/BtwoBServices/FixedDeposit');
});
Route::get('/services/aepsservice', function () {
    return view('InnerPannel/Services/BtwoBServices/AepsService');
});

//LegalService
Route::get('/services/birthcertificate', function () {
    return view('InnerPannel/Services/LegalServices/BirthCertificateService');
});
Route::get('/services/deathcertificate', function () {
    return view('InnerPannel/Services/LegalServices/DeathCertificateService');
});
Route::get('/services/nsdlpancenter', function () {
    return view('InnerPannel/Services/LegalServices/NsdlPanCenterService');
});
Route::get('/services/drivinglicence', function () {
    return view('InnerPannel/Services/LegalServices/DrivingLicenceService');
});



Route::get('/walletsection/walletsummary', function () {
    return view('InnerPannel/WalletSection/WalletSummary');
});
Route::get('/walletsection/printMyQR', function () {
    return view('InnerPannel/WalletSection/PrintQR');
});
