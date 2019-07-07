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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/****************************Admin Route*****************************/
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
    Route::get('/','HomeController@admin')->name('admin');
    Route::get('/banner','BannerController@getBanner')->name('banner-list');

});
/****************************Admin Route*****************************/

/****************************Employ Route*****************************/
Route::group(['prefix'=>'employ','middleware'=>['auth','employ']],function(){
    Route::get('/','HomeController@employ')->name('employ');

    Route::get('/banner','BannerController@getBanner')->name('banner-list');

    Route::get('/banner/add','BannerController@showBannerForm')->name('banner-add');

    Route::post('/banner/submit','BannerController@submitPost')->name('banner-post');

    Route::get('/order','OrderController@getOrder')->name('order-list');

    Route::get('/order/add','OrderController@showOrder')->name('order-add');

    Route::post('/order/submit','OrderController@submitOrder')->name('order-post');

    Route::get('/menu','MenuController@getMenu')->name('menu-list');

    Route::get('/menu/add','MenuController@showMenu')->name('menu-add');

    Route::post('/menu/submit','MenuController@submitMenu')->name('menu-post');

});
/****************************Employ Route*****************************/

/****************************ChefRoute*****************************/
Route::group(['prefix'=>'chef','middleware'=>['auth','chef']],function(){
    Route::get('/','HomeController@chef')->name('chef');
});
/****************************Chef Route*****************************/