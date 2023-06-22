<?php

namespace App\Http\Controllers;

use App\Models\Bankaccount;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    // header-views
    public function viewHomePage(){
        return view('home');
    }
    public function viewDashboardPage(){
        return view('dashboard');
    }
    public function viewInfoPage(){
        return view('info');
    }
    public function viewPricingPage(){
        return view('pricing');
    }
    public function viewDetailedFinancesPage(){
        $allBankaccounts = Bankaccount::all();

        return view('detailed-finances',[
            "bankaccounts" => $allBankaccounts,
        ]);
    }
    public function viewPaymentHistoryPage(){
        $payments = DB::table('payments')->where('user_id', Auth::id())->get()->sortByDesc('created_at');

        return view('payment-history',[
            "payments" => $payments,
        ]);
    }
    public function viewDebtPage(){
        return view('debt');
    }
    public function viewLoansPage(){
        return view('loans');
    }
    // admin-views
    public function viewAdminPage(){
        return view('admin');
    }
    public function viewAdminDeleteAccountpage(){
        $allBankaccounts = Bankaccount::all();

        return view('admin-account-delete',[
            "bankaccounts" => $allBankaccounts,
        ]);
    }
    // bankaccount-views
    public function viewCreateBankaccountPage(){
        return view('create-bankaccount-page');
    }
    public function viewBankaccountDepositPage($bankaccountID){
        $bankaccount = Bankaccount::findOrFail($bankaccountID);

        return view('bankaccount-deposit',[
            'bankaccount' => $bankaccount,
        ]);
    }
    public function viewBankaccountWithdrawPage($bankaccountID){
        $bankaccount = Bankaccount::findOrFail($bankaccountID);

        return view('bankaccount-withdraw',[
            'bankaccount' => $bankaccount,
        ]);
    }

    public function viewLoanRequestPage(){
        
        return view('loan-request');
    }
}
