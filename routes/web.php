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
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('/catalog', 'BookController@ShowAllBooks');
Route::get('/catalog/{id}', 'BookController@ShowFullBook');
Route::post('/sendFeedback', 'IndexController@sendFeedback');


Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return redirect()->back();
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware'=>['auth','admin']], function(){
    Route::get('/', 'AdminController@index');
    Route::post('/editSettings', 'AdminController@saveSettings');
    Route::get('/feedback', 'AdminController@showFeedback');

    Route::group(['prefix'=>'author'], function(){ // работа с авторами
        Route::get('/', 'AuthorController@ShowPage');
        Route::get('authors', 'AuthorController@ShowAllAuthors');
        Route::post('add', 'AuthorController@Add');
        Route::delete('authors/{id}/delete', 'AuthorController@deleteAuthor');
    });

    Route::group(['prefix'=>'genre'], function(){ // работа с жанрами
        Route::get('/', 'GenreController@ShowPage');
        Route::get('genres', 'GenreController@ShowAllGenres');
        Route::post('add', 'GenreController@Add');
        Route::delete('genres/{id}/delete', 'GenreController@deleteGenre');
    });

    Route::group(['prefix'=>'post'], function(){ // работа с книгами
        Route::get('/', 'BookController@ShowPage');
        Route::get('books', 'BookController@ShowAllBooks');
        Route::post('add', 'BookController@Add');
    });

});
