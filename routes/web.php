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


Route::middleware('language')->group(function (){
    //Auth::routes();

    Route::get('/test',function (){
        event(new \App\Events\UserActivation(\App\User::find(5)));
    })->name('web.home');

    Route::get('index','HomeController@index')->name('web.index');
    Route::get('/','HomeController@index')->name('web.home');
    Route::get('/category/{id}','HomeController@showCategory')->name('web.show.category');
    Route::get('/product/{id}','HomeController@showProduct')->name('web.show.product');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/user/active/email/{token}', 'UserController@activationAccountByEmail')->name('activation.account.by.email');

    Route::get('/show/page/{id}','HomeController@showPage')->name('web.show.page');

    //contact us
    Route::get('/contact-us','ContactUsController@index')->name('web.contact.us.index');
    Route::post('/contact-us','ContactUsController@insert')->name('web.contact.us.insert');


    // error page

    Route::get('/404', 'HomeController@web404')->name('web.404');
    Route::get('/500', 'HomeController@web500')->name('web.500');

});


// start lang route
//Route::get('/lang/{locale}','HomeController@changeLang')->name('web.change.lang');
Route::get('/lang/{locale}',function($lang){
    \Session::put('locale',$lang);
    //dd(session('locale'));
    return redirect()->back();
})->name('web.change.lang');

//end lang route

// start currency route
Route::get('/currency/{currency}','HomeController@changeCurrency')->name('web.change.currency');
// end currency route



// start admin  route

Route::middleware('auth','checkAdmin')->namespace('Admin')->prefix('admin')->group(function (){
    Route::get('panel','PanelController@index')->name('admin.panel');
    Route::resource('products','ProductsController');
    Route::resource('siteDetails','SiteDetailsController');
    Route::resource('productCategories','ProductCategoriesController');
    Route::resource('slider','SliderController');
    Route::resource('webPages','WebPagesController');
    Route::resource('menus','MenuController');
    Route::resource('menuCategories','MenuCategoriesController');
    Route::resource('contactUs','ContactUsController');
});

// end admin  route


// start auth route
Route::middleware('language')->namespace('Auth')->group(function (){
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

// end auth route

// start user  route

Route::middleware('auth','language')->namespace('User')->prefix('user')->group(function (){
    Route::get('panel','PanelController@index')->name('user.panel');
});

// end user  route


