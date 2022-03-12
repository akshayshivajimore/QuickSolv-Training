<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\TableController;
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

Route::get('/form',[CrudController::class, 'index']);
Route::post('/store',[CrudController::class, 'store']);

Route::get('/list',[TableController::class, 'show']);
Route::get('/delete/{id}',[TableController::class, 'destroy']);
Route::get('/edit/{id}',[TableController::class, 'edit']);