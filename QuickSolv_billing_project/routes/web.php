<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

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

Route::get('/login',[LoginController::class,'login']);
Route::get('/register',[LoginController::class,'register']);

Route::post('/store',[LoginController::class,'store'])->name('store');

Route::post('login/dashboard',[LoginController::class,'dashboard'])->name('dashboard');
// Route::get('/login/dashboard',[LoginController::class,'login']);