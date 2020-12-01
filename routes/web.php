<?php

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

Route::get('/','HomeController@index')->name('index');
Route::get('home',function(){
    return redirect('admin/home');
});

Route::get('checkout','CheckController@create');
Route::get('checkout/{id}','CheckController@token');
Route::post('checkout','CheckController@store');
Route::get('checkout/{id}/ticket','CheckController@edit');
Route::get('checkout/{id}/ticket/pdf','CheckController@pdf');
Route::post('pay/{id}','CheckController@payquick');
Route::get('pay/{id}','QuickController@show');
Route::get('pay/{id}/ticket','QuickController@edit');
Route::get('blog/{id}','BlogController@show');
Route::get('blog/{id}/{ref}','BlogController@show');
Auth::routes();
Route::group(['middleware' => 'auth'], function(){
    Route::prefix('admin')->group(function () {
        Route::get('home','AdminController@index');
        Route::get('home/{id}','AdminController@show');
        Route::post('home','AdminController@store');

        Route::get('transactions','AdminController@transactions');

        Route::post('pay','QuickController@store');
        Route::get('pay','QuickController@index');

        Route::get('blog','BlogController@index');
        Route::get('blog/create','BlogController@create');
        Route::get('blog/{id}/edit','BlogController@edit');
        Route::put('blog/{id}','BlogController@update');
        Route::post('blog','BlogController@store');

        Route::get('users','UsersController@index');
        Route::get('users/{id}/edit','UsersController@edit');
        Route::put('users/{id}','UsersController@update');
        Route::delete('users/{id}','UsersController@destroy');

        Route::get('templates','TemplateController@index');
        Route::get('templates/{id}/edit','TemplateController@edit');
        Route::post('templates/send','TemplateController@send');

        Route::get('products','PricesController@index');
        Route::get('products/{id}/edit','PricesController@edit');
        Route::put('products/{id}','PricesController@update');
        Route::post('products','PricesController@store');
        Route::delete('products/{id}','PricesController@destroy');

        Route::get('coupons','CouponsController@index');
        Route::get('coupons/{id}/edit','CouponsController@edit');
        Route::put('coupons/{id}','CouponsController@update');
        Route::post('coupons','CouponsController@store');
        Route::delete('coupons/{id}','CouponsController@destroy');

        Route::get('ads','AdsController@index');
        Route::get('ads/{id}/edit','AdsController@edit');
        Route::put('ads/{id}','AdsController@update');
        Route::post('ads','AdsController@store');
        Route::delete('ads/{id}','AdsController@destroy');
    });

    Route::get('post/{id}/edit','ContentController@edit');
    Route::get('post/create','ContentController@create');
    Route::put('post/{id}','ContentController@update');
    Route::delete('post/{id}','ContentController@destroy');
    Route::post('post','ContentController@store');

    Route::get('prices/create','PricesController@create');
    Route::post('prices','PricesController@store');
    Route::delete('prices/{id}','PricesController@destroy');

    Route::get('comments/create','CommentsController@create');
    Route::post('comments','CommentsController@store');
    Route::delete('comments/{id}','CommentsController@destroy');
});
