<?php

namespace App\Http\Controllers;

use App\Models\Bankaccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
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
        return view('payment-history');
    }
    public function viewDebtPage(){
        return view('debt');
    }
    public function viewLoansPage(){
        return view('loans');
    }
    public function viewAdminPage(){
        return view('admin');
    }
    public function viewCreateBankaccountPage(){
        return view('create-bankaccount-page');
    }
    public function adminDeleteAccountpage(){
        $allBankaccounts = Bankaccount::all();

        return view('admin-account-delete',[
            "bankaccounts" => $allBankaccounts,
        ]);
    }
}
