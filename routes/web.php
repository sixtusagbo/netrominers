<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoreController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\WithdrawalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CoreController::class, 'index']);
Route::get('/about', [CoreController::class, 'about'])->name('about');
Route::get('/why_us', [CoreController::class, 'why_us'])->name('why_us');
Route::get('/forex_trading', [CoreController::class, 'forex_trading'])->name('forex_trading');
Route::get('/commitments', [CoreController::class, 'commitments'])->name('commitments');
Route::get('/stratagies', [CoreController::class, 'stratagies'])->name('stratagies');
Route::get('/affiliate', [CoreController::class, 'affiliate'])->name('affiliate');
Route::get('/faq', [CoreController::class, 'faq'])->name('faq');
Route::get('/contact', [CoreController::class, 'contact'])->name('contact');
Route::post('/contact', [CoreController::class, 'send_contact']);
Route::get('/security', [CoreController::class, 'security'])->name('security');
Route::get('/terms_and_conditions', [CoreController::class, 'terms'])->name('terms');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/deposit', [HomeController::class, 'deposit'])->name('deposit');
Route::post('/confirm_deposit', [HomeController::class, 'confirm_deposit'])->name('confirm_deposit');
Route::post('/create_deposit', [HomeController::class, 'create_deposit'])->name('create_deposit');
Route::get('/pnl_calculator', [HomeController::class, 'pnl_calculator'])->name('pnl_calculator');
Route::get('/deposit_list', [HomeController::class, 'deposit_list'])->name('deposit_list');
Route::get('/withdraw', [HomeController::class, 'withdraw'])->name('withdraw');
Route::post('/withdraw', [HomeController::class, 'store_withdrawal'])->name('withdrawals.store');
Route::get('/referrals', [HomeController::class, 'referrals'])->name('referrals');
Route::get('/edit_account', [HomeController::class, 'profile'])->name('profile');
Route::post('/profile', [HomeController::class, 'update_profile'])->name('profile.update');

Route::resource('controls', AdminController::class)->only(['index', 'destroy']);
Route::resource('credits', PaymentController::class)->only(['index', 'update', 'destroy']);
Route::resource('debits', WithdrawalController::class)->only(['index', 'update', 'destroy']);
Route::resource('wallets', WalletController::class)->only(['index', 'update']);
