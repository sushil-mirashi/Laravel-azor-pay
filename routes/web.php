<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('razorpay-payment', [PaymentController::class,'create'])->name('pay.with.razorpay'); // create payment

Route::post('payment', [PaymentController::class, 'payment'])->name('payment'); //accept paymetnt
