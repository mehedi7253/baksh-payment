<?php

use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('orders', OrderController::class);

Route::post('token', 'PaymentController@token')->name('token');
Route::get('createpayment', [PaymentController::class, 'createpayment'])->name('createpayment');
Route::get('executepayment', [PaymentController::class, 'executepayment'])->name('executepayment');
