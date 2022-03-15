<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

 // Route::get('/form',[FormController::class,'index']);
// Route::post('/store',[FormController::class,'store']);
// Route::get('/form/users',[TableController::class,'index']);

Route::get('/home',[HomeController::class, 'index'])->name('index');
Route::post('/store',[HomeController::class, 'store'])->name('home.store');