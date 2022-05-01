<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//     return view('frontend.index');
// });

Route::group(['prefix'=>'dashboard','as'=>'dashboard.', 'middleware' => ['auth']], function () {

    //for dashboard
    Route::get('index','dashboardController@indexPage')->name('index');

    Route::get('all-order','dashboardController@allOrder')->name('all.order');
    Route::get('single-order/{id}','dashboardController@singleOrder')->name('single.order');
   
    
    //for category routes

Route::resource('categoryside','categoryController');

//for product routes

Route::resource('product','ProductController');
    });
    

// //for category routes

// Route::resource('categoryside','categoryController');

// //for product routes

// Route::resource('product','ProductController');
 
// //for integrate dashboard

// Route::get('index-dash','dashboardController@indexPage')->name('index.dash');



//for integrate frontend template

Route::get('/','frontendController@indexPage')->name('frontend.index');

Route::get('shop-list','frontendController@shopList')->name('shop.list');

Route::get('shop-single/{id}','frontendController@shopSingle')->name('shop.single');

Route::get('add-to-cart/{id}','frontendController@addToCart')->name('add.cart');

Route::get('remove/{id}','frontendController@removeFromCart')->name('remove');

Route::put('update/{id}','frontendController@updateCart')->name('update.cart');

Route::get('about-us','frontendController@aboutUs')->name('about.us');

Route::get('cart-page','frontendController@cartPage')->name('cart.page');

Route::get('checkout-page','frontendController@checkoutPage')->name('checkout.page');

Route::get('login-page','frontendController@loginPage')->name('login.page');

Route::get('register-page','frontendController@registerPage')->name('register.page');

Route::get('account-page','frontendController@accountPage')->name('account.page');

Route::get('wishlist-page','frontendController@wishlistPage')->name('wishlist.page');

Route::get('add-to-wishlist/{id}','frontendController@addToWishlist')->name('wishlist');

Route::get('remove-from-wishlist/{id}','frontendController@removeFromWishlist')->name('remove.wishlist');

Route::get('contact-page','frontendController@contactPage')->name('contact.page');

//for order

Route::post('order-guest','OrderController@placeOrder')->name('order.guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
