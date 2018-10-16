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

// Route::get('/login', function(){
//     return view('auth.login');
// });


// Route::get('/register', function(){
//     return view('auth.register');
// });
// Route::post('/register', 'Auth\RegisterController@create');

Auth::routes();
// Route::get('/logout', function(){Auth::logout();});
Route::get('/logout', function(){
    Auth::logout();
    return redirect()->back();
});

Route::get('/home', 'HomeController@index')->name('home');
