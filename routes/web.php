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
 //Route::get('/login',[User::class,'login'])->name('login');
Route::get('/singin',[User::class,'singin'])->name('singin');


Route::get('/admin/home',[Admin::class,'Home'])->name('home1');


Route::get('/admin/auth_login',[Admin::class,'auth_login'])->name('auth_login');
Route::get('/admin/auth_lockscreen',[Admin::class,'auth_lockscreen'])->name('auth_lockscreen');
Route::get('/admin/auth_register',[Admin::class,'auth_register'])->name('auth_register');
Route::get('/admin/auth_user_pass',[Admin::class,'auth_user_pass'])->name('auth_user_pass');
Route::get('/admin/calender',[Admin::class,'calender'])->name('calender'); 
Route::get('/admin/card_advanced',[Admin::class,'card_advanced'])->name('card_advanced');
Route::get('/admin/card_basic',[Admin::class,'card_basic'])->name('card_basic');
Route::get('/admin/card_color',[Admin::class,'card_color'])->name('card_color');
Route::get('/admin/charts_chartist',[Admin::class,'charts_chartist'])->name('charts_chartist');
Route::get('/admin/charts_flot',[Admin::class,'charts_flot'])->name('charts_flot');
Route::get('/admin/charts_inline',[Admin::class,'charts_inline'])->name('charts_inline');
Route::get('/admin/charts_morris',[Admin::class,'charts_morris'])->name('charts_morris');
Route::get('/admin/charts_peity',[Admin::class,'charts_peity'])->name('charts_peity');
Route::get('/admin/charts_chartjs',[Admin::class,'charts_chartjs'])->name('charts_chartjs'); 
Route::get('/admin/chat',[Admin::class,'chat'])->name('chat'); 

Route::get('/admin/components_alerts',[Admin::class,'components_alerts'])->name('components_alerts');
Route::get('/admin/components_badges',[Admin::class,'components_badges'])->name('components_badges');
Route::get('/admin/components_buttons',[Admin::class,'components_buttons'])->name('components_buttons');
Route::get('/admin/components_dropdown',[Admin::class,'components_dropdown'])->name('components_dropdown');
Route::get('/admin/components_modals',[Admin::class,'components_modals'])->name('components_modals');
Route::get('/admin/components_nestable',[Admin::class,'components_nestable'])->name('components_nestable');
Route::get('/admin/components_progress_bars',[Admin::class,'components_progress_bars'])->name('components_progress_bars');
Route::get('/admin/components_sliders',[Admin::class,'components_sliders'])->name('components_sliders');
Route::get('/admin/content_grid',[Admin::class,'content_grid'])->name('content_grid');
Route::get('/admin/content_media',[Admin::class,'content_media'])->name('content_media');
Route::get('/admin/content_typography',[Admin::class,'content_typography'])->name('content_typography');
Route::get('/admin/error_404',[Admin::class,'error_404'])->name('error_404');
Route::get('/admin/error_maintenance',[Admin::class,'error_maintenance'])->name('error_maintenance');
Route::get('/admin/faq',[Admin::class,'faq'])->name('faq');  


Route::get('/admin/forms_advanced',[Admin::class,'forms_advanced'])->name('forms_advanced');
Route::get('/admin/forms_code_editor',[Admin::class,'forms_code_editor'])->name('forms_code_editor');
Route::get('/admin/forms_dropzone',[Admin::class,'forms_dropzone'])->name('forms_dropzone');
Route::get('/admin/forms_editors',[Admin::class,'forms_editors'])->name('forms_editors');
Route::get('/admin/forms_general',[Admin::class,'forms_general'])->name('forms_general');
Route::get('/admin/forms_validation',[Admin::class,'forms_validation'])->name('forms_validation');
Route::get('/admin/forms_wizard',[Admin::class,'forms_wizard'])->name('forms_wizard');
Route::get('/admin/gallery',[Admin::class,'gallery'])->name('gallery'); 

Route::get('/admin/icons_cryptocoins',[Admin::class,'icons_cryptocoins'])->name('icons_cryptocoins');
Route::get('/admin/icons_flag',[Admin::class,'icons_flag'])->name('icons_flag');
Route::get('/admin/icons_fontawesome',[Admin::class,'icons_fontawesome'])->name('icons_fontawesome');
Route::get('/admin/icons_glyphicons',[Admin::class,'icons_glyphicons'])->name('icons_glyphicons');
Route::get('/admin/icons_material',[Admin::class,'icons_material'])->name('icons_material');
Route::get('/admin/icons_simpleline',[Admin::class,'icons_simpleline'])->name('icons_simpleline');
Route::get('/admin/icons_themify',[Admin::class,'icons_themify'])->name('icons_themify');
Route::get('/admin/icons_weather',[Admin::class,'icons_weather'])->name('icons_weather');


Route::get('/admin/invoice',[Admin::class,'invoice'])->name('invoice'); 
Route::get('/admin/mailbox_compose',[Admin::class,'mailbox_compose'])->name('mailbox_compose');  
Route::get('/admin/mailbox_inbox',[Admin::class,'mailbox_inbox'])->name('mailbox_inbox'); 
Route::get('/admin/mailbox_read_mail',[Admin::class,'mailbox_read_mail'])->name('mailbox_read_mail'); 
Route::get('/admin/map_google',[Admin::class,'map_google'])->name('map_google');
Route::get('/admin/map_vector',[Admin::class,'map_vector'])->name('map_vector');
Route::get('/admin/profile',[Admin::class,'profile'])->name('profile'); 

Route::get('/admin/tables_data',[Admin::class,'tables_data'])->name('tables_data');
Route::get('/admin/tables_simple',[Admin::class,'tables_simple'])->name('tables_simple');
Route::get('/admin/timeline',[Admin::class,'timeline'])->name('timeline');  
Route::get('/admin/utilities_animations',[Admin::class,'utilities_animations'])->name('utilities_animations');
Route::get('/admin/utilities_border',[Admin::class,'utilities_border'])->name('utilities_border');
Route::get('/admin/utilities_color',[Admin::class,'utilities_color'])->name('utilities_color');
Route::get('/admin/utilities_ribbons',[Admin::class,'utilities_ribbons'])->name('utilities_ribbons');
Route::get('/admin/utilities_tab',[Admin::class,'utilities_tab'])->name('utilities_tab');






// Route::get('/shop'[User::class,'shop']),function(){
//     return view('shop');
// });
