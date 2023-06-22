<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Route;

// GET Routes

Route::get('/', [PagesController::class, 'viewHomePage'])->name('home');

Route::get('/info', [PagesController::class, 'viewInfoPage'])->name('info');

Route::get('/pricing', [PagesController::class, 'viewPricingPage'])->name('pricing');

Route::get('/detailed-finances', [PagesController::class, 'viewDetailedFinancesPage'])->name('detailed-finances')->middleware('auth');

Route::get('/payment-history', [PagesController::class, 'viewPaymentHistoryPage'])->name('payment-history')->middleware('auth');

Route::get('/debt', [PagesController::class, 'viewDebtPage'])->name('debt')->middleware('auth');

Route::get('/loan-requests', [PagesController::class, 'viewLoansPage'])->name('loan-requests')->middleware('auth');

Route::get('/dashboard', [PagesController::class, 'viewDashboardPage'])->name('dashboard')->middleware('auth');

Route::get('/bankaccount/create', [PagesController::class, 'viewCreateBankaccountPage'])->name('create-bankaccount-page')->middleware('auth');

Route::get('/admin', [PagesController::class, 'viewAdminPage'])->name('admin')->middleware(['auth', 'admin']);

Route::get('/admin/delete-bankaccount', [PagesController::class, 'viewAdminDeleteAccountpage'])->name('admin-delete-bankaccount-page')->middleware(['auth', 'admin']);

Route::get('/bankaccount/deposit/{bankaccountID}', [PagesController::class, 'viewBankaccountDepositPage'])->name('bankaccount-deposit-page')->middleware('auth');

Route::get('/bankaccount/withdraw/{bankacountID}', [PagesController::class, 'viewBankaccountWithdrawPage'])->name('bankaccount-withdraw-page')->middleware('auth');

Route::get('/bankaccount/loan-request/request', [PagesController::class, 'viewLoanRequestPage'])->name('loan-request-form')->middleware('auth');

// POST Routes

Route::post('/bankaccount/create', [AccountsController::class, 'createBankaccount'])->name('create-bank-account')->middleware('auth');

Route::post('/admin/bankaccount/delete/{bankaccountID}', [AccountsController::class, 'deleteBankaccount'])->name('delete-bank-account')->middleware(['auth', 'admin']);

Route::post('/bankaccount/deposit/{bankaccountID}', [AccountsController::class, 'depositMoney'])->name('bankaccount-deposit-money')->middleware('auth');

Route::post('/bankaccount/withdraw/{bankaccountID}', [AccountsController::class, 'withdrawMoney'])->name('bankaccount-withdraw-money')->middleware('auth');
    
require __DIR__.'/auth.php';
