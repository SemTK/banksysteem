<?php

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

Route::get('/admin', [PagesController::class, 'viewAdminPage'])->name('admin')->middleware(['auth', 'admin']);

// POST Routes

require __DIR__.'/auth.php';
