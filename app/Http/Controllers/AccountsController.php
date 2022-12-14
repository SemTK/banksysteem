<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Bankaccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
