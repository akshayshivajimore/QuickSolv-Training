<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\BillingListController;

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
    return view('login');
});


Route::get('/register',[LoginController::class,'register']);
Route::post('/store',[LoginController::class,'store'])->name('store');
Route::post('login/billing_list',[LoginController::class,'dashboard'])->name('dashboard');
Route::get('login/billing_list',[LoginController::class,'billing_list']);
Route::get('login/billing_list_info',[BillingListController::class,'billing_list_info']);
Route::get('login/create_billing',[BillingListController::class,'create_billing']);
// Route::get('/login/dashboard',[LoginController::class,'login']);
// Route::get('/login/billing_list',[LoginController::class,'billing_list']);
