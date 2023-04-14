<?php

use App\Http\Controllers\SitemapController;
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


Route::middleware('language', 'visit')->group(function () {
    //Auth::routes();

    Route::get('/test', function () {
        event(new \App\Events\UserActivation(\App\User::find(5)));
    })->name('web.home');

    Route::get('index', 'HomeController@index')->name('web.index');
    Route::get('/', 'HomeController@index')->name('web.home');
    Route::get('/category/{slug}', 'HomeController@showCategory')->name('web.show.category');
    Route::get('/product/{slug}', 'HomeController@showProduct')->name('web.show.product');

    Route::get('/news/category/{slug}', 'HomeController@showNewsCategory')->name('web.show.news.category');
    Route::get('/news/{slug}', 'HomeController@showNews')->name('web.show.news');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/user/active/email/{token}', 'UserController@activationAccountByEmail')->name('activation.account.by.email');
    Route::POST('/user/active/sme', 'UserController@activationAccountBySMS')->name('web.activation.account.by.sms');
    Route::POST('/user/reset/password/code/sme', 'UserController@resetPasswordBySMS')->name('web.reset.password.by.sms');

    Route::get('/show/page/{id}', 'HomeController@showPage')->name('web.show.page');

    //contact us
    Route::get('/contact-us', 'ContactUsController@index')->name('web.contact.us.index');
    Route::post('/contact-us', 'ContactUsController@insert')->name('web.contact.us.insert');
    Route::get('/about_us', 'HomeController@aboutUs')->name('web.show.about_us');

    //complaint
    Route::get('/complaint', 'ComplaintController@index')->name('web.complaint.index');
    Route::post('/complaint', 'ComplaintController@insert')->name('web.complaint.insert');

    Route::get('/قیمت-میلگرد', 'HomeController@showAllMilegerd')->name('web.HomeController.show.all.milegerd');

});

// error page

Route::get('/404', 'HomeController@web404')->name('web.404');
Route::get('/500', 'HomeController@web500')->name('web.500');


// start lang route
//Route::get('/lang/{locale}','HomeController@changeLang')->name('web.change.lang');
Route::get('/lang/{locale}', function ($lang) {
    \Session::put('locale', $lang);
    //dd(session('locale'));
    return redirect()->back();
})->name('web.change.lang');

//end lang route

// start currency route
Route::get('/currency/{currency}', 'HomeController@changeCurrency')->name('web.change.currency');
// end currency route


// start admin  route

Route::middleware('auth', 'checkAdmin')->namespace('Admin')->prefix('admin')->group(function () {
    Route::get('panel', 'PanelController@index')->name('admin.panel');
    Route::resource('products', 'ProductsController');
    Route::resource('siteDetails', 'SiteDetailsController');
    Route::resource('productCategories', 'ProductCategoriesController');
    Route::resource('slider', 'SliderController');
    Route::resource('webPages', 'WebPagesController');
    Route::resource('menus', 'MenuController');
    Route::resource('menuCategories', 'MenuCategoriesController');
    Route::resource('contactUs', 'ContactUsController');
    Route::resource('complaint', 'ComplaintController');
    Route::get('/panel/upload-image', 'PanelCotroller@uploadImageSubject');
    Route::resource('newsCategories', 'NewsCategoriesController');
    Route::resource('news', 'NewsController');
    Route::resource('currencyConvert', 'CurrencyConvertController');
    Route::resource('usersList', 'UsersListController');

    Route::get('/payments/index', 'PaymentController@index')->name('admin.payments.index');
    Route::get('/payments/show', 'PaymentController@show')->name('admin.payments.show');
    Route::post('/payments/store', 'PaymentController@store')->name('admin.payments.store');
    Route::post('/payments/update', 'PaymentController@update')->name('admin.payments.update');


    Route::get('/test/irandargah', 'TestIrandargahCotroller@index')->name('admin.test.irandargah.index');
    Route::post('/test/irandargah/send', 'TestIrandargahCotroller@send')->name('admin.test.irandargah.send');
});

// end admin  route


// start auth route
Route::middleware('language', 'visit')->namespace('Auth')->group(function () {
    // Authentication Routes...
    //Route::get('login', 'LoginController@showLoginForm')->name('login');
    //Route::post('login', 'LoginController@login');


    Route::get('login', 'LoginSmsController@showLoginForm')->name('login');
    Route::get('login/sms', 'LoginSmsController@showLoginForm')->name('login.sms');
    Route::post('login/sms', 'LoginSmsController@login');

    Route::get('logout', 'LoginController@logout')->name('logout');


    // Registration Routes...
    Route::get('register', 'RegisterSmsController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterSmsController@register');

    Route::get('register/sms', 'RegisterSmsController@showRegistrationForm')->name('register.sms');
    Route::post('register/sms', 'RegisterSmsController@register');

    Route::post('activation/account/sms', 'RegisterSmsController@showActivationAccontSms')->name('activation.account.sms');

    // Password Reset Routes...
    // Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    // Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    // Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    // Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
    // Password Reset By SMS Routes
    Route::get('password/sms/reset', 'ForgotPasswordSmsController@showLinkRequestForm')->name('password.request.sms');
    Route::post('password/sms', 'ForgotPasswordSmsController@sendResetLinkSms')->name('password.sms');
    Route::get('password/reset/code/sms', 'ResetPasswordSmsController@showResetForm')->name('password.reset.sms');
    Route::post('password/update/sms/reset', 'ResetPasswordSmsController@reset')->name('password.update.sms');


});

// end auth route

// start user  route

Route::middleware('auth', 'language', 'visit')->namespace('User')->prefix('user')->group(function () {
    Route::get('panel', 'PanelController@index')->name('user.panel');
});

// end user  route


// start buyer  route

Route::middleware('auth', 'language', 'visit', 'checkBuyer')->namespace('Buyer')->prefix('buyer')->group(function () {
    Route::get('panel', 'PanelController@index')->name('buyer.panel');
    Route::post('profile/save', 'ProfileController@save')->name('buyer.profile.save');
    Route::get('/payments/index', 'PaymentController@index')->name('buyer.payments.index');
    Route::post('/payments/pay', 'PaymentController@pay')->name('buyer.payments.pay');
    Route::post('/payments/store', 'PaymentController@store')->name('buyer.payments.store');
    Route::post('/payments/update', 'PaymentController@update')->name('buyer.payments.update');
});

// end buyer  route


//start ckfinder route

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');

//Route::any('/ckfinder/examples/{example?}', 'CKSource\CKFinderBridge\Controller\CKFinderController@examplesAction')
//    ->name('ckfinder_examples');

//end ckfinder route


// start route payment

Route::get('payment/online/zarinpal', 'OnlinePaymentController@payZarinpal')->name('web.payment.online.zarinpal');
Route::get('payment/online/zarinpal/callback', 'OnlinePaymentController@payZarinpalCallback')->name('web.payment.online.zarinpal.callback');
Route::get('payment/online/zarinpal/callback/teacher', 'OnlinePaymentController@payZarinpalCallbackTeacher')->name('web.payment.online.zarinpal.callback.teacher');
Route::get('payment/online/zarinpal/callback/noor', 'OnlinePaymentController@payZarinpalCallbackNoor')->name('web.payment.online.zarinpal.callback.noor');


Route::post('payment/online/meli', 'OnlinePaymentController@payMeli')->name('web.payment.online.meli');
Route::post('payment/online/meli/callback', 'OnlinePaymentController@payMeliCallback')->name('web.payment.online.meli.callback');
Route::post('payment/online/meli/callback/teacher', 'OnlinePaymentController@payMeliCallbackTeacher')->name('web.payment.online.meli.callback.teacher');
Route::post('payment/online/meli/callback/noor', 'OnlinePaymentController@payMeliCallbackNoor')->name('web.payment.online.meli.callback.noor');
Route::get('payment/online/meli/callback/noor', 'OnlinePaymentController@payMeliCallbackNoor')->name('web.payment.online.meli.callback.noor.get');


Route::post('payment/online/irandargah', 'OnlinePaymentController@payIrandargah')->name('web.payment.online.irandargah');
Route::post('payment/online/irandargah/callback', 'OnlinePaymentController@payIrandargahCallback')->name('web.payment.online.irandargah.callback');
// end route payment


Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.index');
