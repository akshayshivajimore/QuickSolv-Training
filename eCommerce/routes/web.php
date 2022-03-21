<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductControllerr;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});


Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);


Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::get("/signup",[UserController::class,'signup']);
Route::post("/signup-add",[UserController::class,'add']);

Route::get("admin/dashboard",[AdminController::class,'index']);

// Category Route
Route::get("admin/category",[CategoryController::class,'index']);
Route::get("admin/category/manage_category",[CategoryController::class,'manage_category']);
Route::get("admin/category/manage_category/{id}",[CategoryController::class,'manage_category']);
Route::post("admin/category/manage_category_process",[CategoryController::class,'manage_category_process'])->name('category.manage_category_process');
Route::get("admin/category/delete/{id}",[CategoryController::class,'delete']);
Route::get("admin/category/status/{status}/{id}",[CategoryController::class,'status']);

// Coupon Route
Route::get("admin/coupon",[CouponController::class,'index']);
Route::get("admin/coupon/manage_coupon",[CouponController::class,'manage_coupon']);
Route::get("admin/coupon/manage_coupon/{id}",[CouponController::class,'manage_coupon']);
Route::post("admin/coupon/manage_coupon_process",[CouponController::class,'manage_coupon_process'])->name('coupon.manage_coupon_process');
Route::get("admin/coupon/delete/{id}",[CouponController::class,'delete']);
Route::get("admin/coupon/status/{status}/{id}",[CouponController::class,'status']);

// Size Route
Route::get("admin/size",[SizeController::class,'index']);
Route::get("admin/size/manage_size",[SizeController::class,'manage_size']);
Route::get("admin/size/manage_size/{id}",[SizeController::class,'manage_size']);
Route::post("admin/size/manage_size_process",[SizeController::class,'manage_size_process'])->name('size.manage_size_process');
Route::get("admin/size/delete/{id}",[SizeController::class,'delete']);
Route::get("admin/size/status/{status}/{id}",[SizeController::class,'status']);

//color Route

Route::get("admin/color",[ColorController::class,'index']);
Route::get("admin/color/manage_color",[ColorController::class,'manage_color']);
Route::get("admin/color/manage_color/{id}",[ColorController::class,'manage_color']);
Route::post("admin/color/manage_color_process",[ColorController::class,'manage_color_process'])->name('color.manage_color_process');
Route::get("admin/color/delete/{id}",[ColorController::class,'delete']);
Route::get("admin/color/status/{status}/{id}",[ColorController::class,'status']);

//Product Route

Route::get("admin/product",[ProductControllerr::class,'index']);
Route::get("admin/product/manage_product",[ProductControllerr::class,'manage_product']);
Route::get("admin/product/manage_product/{id}",[ProductControllerr::class,'manage_product']);
Route::post("admin/product/manage_product_process",[ProductControllerr::class,'manage_product_process'])->name('product.manage_product_process');
Route::get("admin/product/delete/{id}",[ProductControllerr::class,'delete']);
Route::get("admin/product/status/{status}/{id}",[ProductControllerr::class,'status']);