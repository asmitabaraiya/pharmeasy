<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Admin;
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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/header',function(){
//     return view('header');
// });






Route::get('/home',[User::class,'home'])->name('home');
 Route::get('/shop',[User::class,'shop'])->name('shop');
Route::get('/about',[User::class,'about'])->name('about');
Route::get('/contact',[User::class,'contact'])->name('contact');
Route::get('/cart',[User::class,'cart'])->name('cart');
Route::get('/checkout',[User::class,'checkout'])->name('checkout');
Route::get('/shop-single',[User::class,'shop_single'])->name('shop_single');
Route::get('/thankyou',[User::class,'thankyou'])->name('thankyou');



Route::get('/admin/home',[Admin::class,'Home'])->name('home1');


// Route::get('/shop'[User::class,'shop']),function(){
//     return view('shop');
// });
