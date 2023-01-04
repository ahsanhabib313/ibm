<?php

// use Illuminate\Support\Facades\Artisan;


use Illuminate\Support\Facades\Artisan;
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



Auth::routes();


Route::get('migrate', function () {
    Artisan::call('migrate');
    return 'Database migrated';
});
Route::get('migrate-fresh', function () {
    Artisan::call('migrate:fresh');
    return 'Database migrate freshed';
});
Route::get('db-seed', function () {
    Artisan::call('db:seed');
    return 'Database seeded';
});
Route::get('optimize-clear', function () {
    Artisan::call('optimize:clear');
    return 'Opmize Cleared';
});

Route::group(['namespace' => 'Backend'], function () {

    Route::get('/auth', 'AuthController@index');
    Route::get('/auth/{path}', 'AuthController@index')->where('path', '([A-z\d\-\/_.]+)?');

    Route::get('/admin', 'HomeController@index');
    Route::get('/admin/{path}', 'HomeController@index')->where('path', '([A-z\d\-\/_.]+)?');
});


// SSLCOMMERZ Start

// Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
// Route::get('/checkout/{user_id}/{package_id}', 'SslCommerzPaymentController@checkout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END




Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index')->name('/');
    Route::get('/{frontend}', 'HomeController@index')->where('frontend', '([A-z\d\-\/_.]+)?');
});



Route::get('clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return back();
});
