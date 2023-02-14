<?php

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index()
    {
        $a = Auth::user();
        $res['name'] = $a->firstName . " " . $a->lastName;
        $res['id'] =  Crypt::encryptString($a->id);
        return view('Wallet.AddWallet', $res);
    }

    public function updateWallet()
    {
        $getData = request()->all();
        try {
            $trans = DB::beginTransaction();
            $userId = Crypt::decryptString($getData['userId']);
            $checkWallet = DB::table('user_wallet')->where('userId', $userId)->select('wId')->first();
            if ($checkWallet) {
                $insertAllRecord = DB::transaction(function () use ($checkWallet, $getData) {
                    DB::table('user_wallet')->where('wId', $checkWallet->wId)->update([
                        'walletAmount' => $getData['amount'],
                        'updatedOn' => date('y-m-d H:i:s'),
                    ]);
                });
            } else {
                $insertAllRecord = DB::transaction(function () use ( $getData, $userId) {
                   $insertId= DB::table('user_wallet')->insertGetId([
                        'userId' =>  $userId,
                        'walletAmount' => $getData['amount'],
                        'createdOn' => date('y-m-d H:i:s'),
                    ]);
                    DB::table('user_wallet_log')->insert([
                        'wId' =>  $insertId,
                        'serviceLogId' =>  0,
                        'transactionType' =>  1,
                        'userId' =>  $userId,
                        'walletAmount' => $getData['amount'],
                        'createdOn' => date('y-m-d H:i:s'),
                    ]);
                });
            }

            if(is_null($insertAllRecord)){
                $status = true;
                $msg = "Wallet Updated Successfully";
            }
            DB::commit($trans);
        } catch (\Exception $t) {
            DB::rollBack($trans);
            Log::error("Error", [
                'Controller' => 'updateWallet',
                'Method' => 'WalletController',
                'Error' => $t->getMessage(),
            ]);
            $status = false;
            $msg = "Something went wrong. please try again later";
        }
        return response()->json([
            'status' =>  $status,
            'message' => $msg
        ]);
    }
}
