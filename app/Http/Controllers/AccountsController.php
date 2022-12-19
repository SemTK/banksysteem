<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Bankaccount;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\CommonMark\Parser\Inline\BangParser;

class AccountsController extends Controller
{
    public function createBankaccount(Request $request){
        $account = new Bankaccount();
        $account->owner_id = Auth::user()->id;
        $account->owner_name = Auth::user()->name;
        $account->money = $request->input('money');
        $account->type = $request->input('typeOfAccount');
        $account->save();

        return redirect('dashboard');
    }

    public function deleteBankaccount($bankaccountID){
        $bankaccount = Bankaccount::findOrFail($bankaccountID);
        $bankaccount->delete();

        return back();
    }

    public function depositMoney(Request $request ,$bankaccountID){
        $bankaccount = Bankaccount::findOrFail($bankaccountID);
        $bankaccount->money += $request->input('money');
        $bankaccount->save();

        return redirect('detailed-finances');
    }

    public function withdrawMoney(Request $request, $bankaccountID){
        $bankaccount = Bankaccount::findOrFail($bankaccountID);
        $bankaccount->money -= $request->input('money');
        $bankaccount->save();

        $payment = new Payment();
        $payment->user_id = Auth::user()->id;
        $payment->bankaccount_id = $bankaccount->id;
        $payment->amount = $request->input('money');
        $payment->receiving_account =  $request->input('receiving-bankaccount-id');
        $payment->save();

        $receiving_user_id = $payment->receiving_account;
        $receiving_user = Bankaccount::findOrFail($receiving_user_id);

        if($receiving_user->id == $receiving_user_id){
            $receiving_user->money += $payment->amount;
            $receiving_user->save();
        }

        return redirect('detailed-finances');
    }
}
