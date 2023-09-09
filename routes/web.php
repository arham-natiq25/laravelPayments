<?php

use App\Http\Controllers\Gateways\PayPalController;
use App\Http\Controllers\Gateways\StripeController;
use App\Http\Controllers\Gateways\TwoCheckoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Paypal Payment Routes
Route::post('paypal/payment', [PayPalController::class, 'payment'])->name('paypal.payment');

Route::get('paypal/success', [PayPalController::class, 'success'])->name('paypal.success');
Route::get('paypal/cancel', [PayPalController::class, 'cancel'])->name('paypal.cancel');

// Stripe routes for payments
Route::post('stripe/payment', [StripeController::class, 'payment'])->name('stripe.payment');
Route::get('stripe/success', [StripeController::class, 'success'])->name('stripe.success');
Route::get('stripe/cancel', [StripeController::class, 'cancel'])->name('stripe.cancel');


// two check out routes

Route::get('twocheckout/payment',[TwoCheckoutController::class, 'showFrom'])->name('twocheckout.payment');
Route::post('twocheckout/handle-payment',[TwoCheckoutController::class, 'handlePayment'])->name('twocheckout.handle-payment');
Route::get('twocheckout/success', [TwoCheckoutController::class, 'success'])->name('twocheckout.success');
