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

Route::get('/', 'PagesController@index');

Route::resource('/news', 'NewsController');
Route::resource('/comment/news', 'CommentNewsController');

Route::resource('/forum', 'ForumController');
Route::resource('/comment', 'CommentForumController');

Route::resource('/coding', 'CodingController');
Route::resource('/comment/coding', 'CommentCodingController');

Route::resource('/profile', 'ProfileController');
Route::resource('/contact', 'ContactController');

//Group
Route::group(['prefix'=>'/about'], function(){
    Route::get('/', 'PagesController@about');
    Route::resource('/contact', 'ContactController');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
