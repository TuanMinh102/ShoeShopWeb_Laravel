<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;



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
Route::get('/home',[HomeController::class,"homeview"]);

Route::get('/login',[UserController::class,"loginview"]);
Route::get('/login{id}',[UserController::class,"logout"]);
Route::get('/dn',[UserController::class,"dangnhap"]);
Route::get('/dk',[UserController::class,"dangky"]);

Route::get('/shop',[ProductController::class,"Shopview"]);
Route::get('/ct',[ProductController::class,"chitiet"]);
Route::get('/cats{id}',[ProductController::class,"Catogories"]);
Route::get('/brands{id}',[ProductController::class,"Brands"]);
Route::get('/ct{id}',[ProductController::class,"details"]);
Route::get('/tk',[ProductController::class,"timkiem"]);

Route::get('/gh',[CartController::class,"getcart"]);
Route::get('/gh{id}',[CartController::class,"addcart"]);
Route::get('/del',[CartController::class,"xoatoanbo"]);
Route::get('/update{id}',[CartController::class,"capnhatgh"]);
Route::get('/delProduct{id}',[CartController::class,"delProduct"]);

Route::get('/tt',[CheckoutController::class,"checkoutview"]);
Route::get('/ttoan',[CheckoutController::class,"thanhtoan"]);
// Route::get('/mail',[CheckoutController::class,"SendMail"]);

Route::get('/admin',[AdminController::class,"adminview"]);



