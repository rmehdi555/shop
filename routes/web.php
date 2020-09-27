<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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

Route::get('index','HomeController@index')->name('web.index');
Route::get('/','HomeController@index')->name('web.home');
Route::get('/category/{id}','HomeController@showCategory')->name('web.show.category');
Route::get('/product/{id}','HomeController@showProduct')->name('web.show.product');

Route::get('/lang/{locale}','HomeController@changeLang')->name('web.change.lang');
Route::get('/currency/{currency}','HomeController@changeCurrency')->name('web.change.currency');




// start admin  route

Route::middleware('auth','checkAdmin')->namespace('Admin')->prefix('admin')->group(function (){
    Route::get('panel','PanelController@index')->name('admin.panel');
    Route::resource('products','ProductsController');
    Route::resource('siteDetails','SiteDetailsController');
    Route::resource('productCategories','ProductCategoriesController');
    Route::resource('slider','SliderController');
});

// end admin  route


Route::namespace('Auth')->group(function (){
    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');

//    // Login And Register With Google
//    Route::get('login/google', 'LoginController@redirectToProvider');
//    Route::get('login/google/callback', 'LoginController@handleProviderCallback');
    // Registration Routes...
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');
});


//Auth::routes();
//

Route::get('/home', 'HomeController@index')->name('home');
