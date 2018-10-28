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

Route::get('/', 'IndexController@Index');

Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return redirect()->back();
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index');
    Route::post('/editSettings', 'AdminController@saveSettings');
});
