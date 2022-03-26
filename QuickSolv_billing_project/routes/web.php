<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\InvoiceController;


Route::get('', function () {
    return view('billing.register');
});
    
Route::get('/login',[LoginController::class,'login']);
Route::get('/register',[LoginController::class,'register']);
Route::post('/store',[LoginController::class,'store'])->name('store');
Route::post('logindata',[LoginController::class,'logindata'])->name('logindata');

Route::get('/billing-list',[BillingController::class,'index']);
Route::get('/add', [BillingController::class, 'add']);
Route::post('/insert',[BillingController::class,'insert']);
Route::get('/view',[BillingController::class,'view']);
Route::post('update-/{id}',[BillingController::class,'update']);
Route::get('billing_list/delete/{rec_id}',[BillingController::class,'destroy']);

Route::get('/billing-list-info',[InvoiceController::class,'index']);
Route::get('/create', [InvoiceController::class, 'create']);
Route::post('/insert',[InvoiceController::class,'insert']);