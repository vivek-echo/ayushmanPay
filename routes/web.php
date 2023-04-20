<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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
Route::get('/config', function () {
    Artisan::call('optimize:clear');
    return "cache:cleared";
});
Route::get('/checkExistingUser', [App\Http\Controllers\Home\HomePageController::class, 'checkExistingUser']);
Route::get('/checkUserTypedAndEncryptedOTP', [App\Http\Controllers\Home\HomePageController::class, 'checkUserTypedAndEncryptedOTP']);
Route::get('/loginAction', [App\Http\Controllers\Home\HomePageController::class, 'loginAction']);
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
    Route::match(['GET', 'POST'], '/wallet/UpdateWallet', [App\Http\Controllers\InnerPannel\Wallet\WalletController::class, 'index']);
    Route::match(['GET', 'POST'], '/UpdateWallet', [App\Http\Controllers\InnerPannel\Wallet\WalletController::class, 'updateWallet']);
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
    Route::match(['GET', 'POST'], '/payBroadbandBill', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\BroadbandServicesController::class, 'payBroadbandBill']);
    //Money Transfer
    Route::match(['GET', 'POST'], '/services/b2bServices/MoneyTransfer', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'index']);
    Route::match(['GET', 'POST'], '/checkRemitter', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'checkRemitter']);
    Route::match(['GET', 'POST'], '/submitRemiterRegister', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'submitRemiterRegister']);
    Route::match(['GET', 'POST'], '/fetchMoneySendDetails', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'fetchMoneySendDetails']);
    Route::match(['GET', 'POST'], '/addBenfeiciry', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'addBenfeiciry']);
    Route::match(['GET', 'POST'], '/deletebeneficiary', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'deletebeneficiary']);
    Route::match(['GET', 'POST'], '/fetchMoneyTransferDetails', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'fetchMoneyTransferDetails']);
    Route::match(['GET', 'POST'], '/getOtpMoneyTansfer', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'getOtpMoneyTansfer']);
    Route::match(['GET', 'POST'], '/sendMoneyValidateOtp', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'validateOtp']);
    Route::match(['GET', 'POST'], '/sendMoney', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'sendMoney']);
    Route::match(['GET', 'POST'], '/checkTransStatusfun', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'checkTransStatusfun']);
    Route::match(['GET', 'POST'], '/refundDMT', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'refundDMT']);
    Route::match(['GET', 'POST'], '/getBankList', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'getBankList']);
    Route::match(['GET', 'POST'], '/penneyDropMoneyTransfer', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\MoneyTransferController::class, 'penneyDropMoneyTransfer']);

    //pancard uti
    Route::match(['GET', 'POST'], '/services/b2bServices/PanCardUti', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\PanCardUtiController::class, 'index']);
    //driving license
    Route::match(['GET', 'POST'], '/services/legalServices/drivinglicence', [App\Http\Controllers\InnerPannel\Services\LegalServices\DrivingLicController::class, 'index']);
    Route::match(['GET', 'POST'], '/fetchDrivingLic', [App\Http\Controllers\InnerPannel\Services\LegalServices\DrivingLicController::class, 'fetchDrivingLic']);
    Route::match(['GET', 'POST'], '/downloadDrivingLic', [App\Http\Controllers\InnerPannel\Services\LegalServices\DrivingLicController::class, 'downloadDrivingLic']);
    //pancard nsld
    Route::match(['GET', 'POST'], '/services/legalServices/PanCardNsld', [App\Http\Controllers\InnerPannel\Services\LegalServices\PanCardNsldController::class, 'index'])->name('NsldCallback');
    Route::match(['GET', 'POST'], '/PanCardNsldGen', [App\Http\Controllers\InnerPannel\Services\LegalServices\PanCardNsldController::class, 'PanCardNsldGen']);
    Route::match(['GET', 'POST'], '/PanCardNsldCallback', [App\Http\Controllers\InnerPannel\Services\LegalServices\PanCardNsldController::class, 'PanCardNsldCallback']);
    Route::match(['GET', 'POST'], '/getCheckPanStatusFun', [App\Http\Controllers\InnerPannel\Services\LegalServices\PanCardNsldController::class, 'getCheckPanStatusFun']);
    Route::match(['GET', 'POST'], '/getTransStatusNSDLFun', [App\Http\Controllers\InnerPannel\Services\LegalServices\PanCardNsldController::class, 'getTransStatusNSDLFun']);

    //walletsummary
    Route::match(['GET', 'POST'], '/wallet/walletsummary', [App\Http\Controllers\InnerPannel\Wallet\WalletSummaryController::class, 'index']) ;
    Route::match(['GET', 'POST'], '/getWalletLogs', [App\Http\Controllers\InnerPannel\Wallet\WalletSummaryController::class, 'getWalletLogs']);
    Route::match(['GET', 'POST'], '/wallet/payoutWallet', [App\Http\Controllers\InnerPannel\Wallet\WalletPayoutController::class, 'index']);
    Route::match(['GET', 'POST'], '/addAccountPayout', [App\Http\Controllers\InnerPannel\Wallet\WalletPayoutController::class, 'addAccountPayout']);
    Route::match(['GET', 'POST'], '/uploadPayoutDoc', [App\Http\Controllers\InnerPannel\Wallet\WalletPayoutController::class, 'uploadPayoutDoc'])->name('uploadPayoutDoc');
    Route::match(['GET', 'POST'], '/accountStatusPayout', [App\Http\Controllers\InnerPannel\Wallet\WalletPayoutController::class, 'accountStatusPayout']);
    Route::match(['GET', 'POST'], '/sendMoneyWalletPayout', [App\Http\Controllers\InnerPannel\Wallet\WalletPayoutController::class, 'sendMoneyWalletPayout']);

    //rc
    Route::match(['GET', 'POST'], '/services/legalServices/Rc', [App\Http\Controllers\InnerPannel\Services\LegalServices\RCController::class, 'index']);
    Route::match(['GET', 'POST'], '/fetchRC', [App\Http\Controllers\InnerPannel\Services\LegalServices\RCController::class, 'fetchRC']);

    //voter Id card
    Route::match(['GET', 'POST'], '/services/legalServices/voterIdCard', [App\Http\Controllers\InnerPannel\Services\LegalServices\VoterController::class, 'index']);
    Route::match(['GET', 'POST'], '/fetchVoter', [App\Http\Controllers\InnerPannel\Services\LegalServices\VoterController::class, 'fetchVoter']);

    //profile section
    Route::match(['GET', 'POST'], '/profile/profileUpdate', [App\Http\Controllers\InnerPannel\Profile\ProfileController::class, 'profileUpdateIndex'])->name('updtPro');
    Route::match(['GET', 'POST'], '/profileUpdate', [App\Http\Controllers\InnerPannel\Profile\ProfileController::class, 'profileUpdate']);
    Route::match(['GET', 'POST'], '/profile/changePassword', [App\Http\Controllers\InnerPannel\Profile\ProfileController::class, 'changePasswordIndex']);
    Route::match(['GET', 'POST'], '/changePassword', [App\Http\Controllers\InnerPannel\Profile\ProfileController::class, 'changePassword']);
    Route::match(['GET', 'POST'], '/profileBankUpdate', [App\Http\Controllers\InnerPannel\Profile\ProfileController::class, 'profileBankUpdate']);
    Route::match(['GET', 'POST'], '/kycUpdate', [App\Http\Controllers\InnerPannel\Profile\ProfileController::class, 'kycUpdate']);

    //aeps 
    // D:\apnaBhartPay\app\Http\Controllers\InnerPannel\Services\BTwoBServices\AepsController.php
    Route::match(['GET', 'POST'], '/services/b2bServices/aepsservice', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\AepsController::class, 'index'])->name('aeps');
    Route::match(['GET', 'POST'], '/aepsKycCallBack', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\AepsController::class, 'aepsKycCallBack']);
    Route::match(['GET', 'POST'], '/getBankNameList', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\AepsController::class, 'getBankNameList']);
    Route::match(['GET', 'POST'], '/getBEAeps', [App\Http\Controllers\InnerPannel\Services\BTwoBServices\AepsController::class, 'getBEAeps'])->name('aepsSubmit');

    // members list 
    Route::match(['GET', 'POST'], '/member/memberlist', [App\Http\Controllers\InnerPannel\Member\MembersListController::class, 'index']);
    Route::match(['GET', 'POST'], '/getMembersDetails', [App\Http\Controllers\InnerPannel\Member\MembersListController::class, 'getMembersDetails']);
    Route::match(['GET', 'POST'], '/verifykycbtn', [App\Http\Controllers\InnerPannel\Member\MembersListController::class, 'verifykycbtn']);
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

Route::get('/services/irctcservice', function () {
    return view('InnerPannel/Services/BtwoBServices/IrctcService');
});
Route::get('/services/fixeddepositservice', function () {
    return view('InnerPannel/Services/BtwoBServices/FixedDeposit');
});


//LegalService
Route::get('/services/birthcertificate', function () {
    return view('InnerPannel/Services/LegalServices/BirthCertificateService');
});
Route::get('/services/deathcertificate', function () {
    return view('InnerPannel/Services/LegalServices/DeathCertificateService');
});


Route::get('/services/rcservice', function () {
    return view('InnerPannel/Services/LegalServices/RCService');
});



Route::get('/walletsection/printMyQR', function () {
    return view('InnerPannel/WalletSection/PrintQR');
});
