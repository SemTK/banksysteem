<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewHomePage(){
        return view('home');
    }
    public function viewInfoPage(){
        return view('info');
    }
    public function viewPricingPage(){
        return view('pricing');
    }
    public function viewDetailedFinancesPage(){
        return view('detailed-finances');
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
    public function viewDashboardPage(){
        return view('dashboard');
    }
}
