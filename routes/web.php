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

Route::get('/', 'PostController@index')->name('home');
Route::post('/post', 'PostController@store');
Route::post('/comment/{post}', 'PostController@comment');

// Profile picture of a user
Route::get('/photo/{username}', 'ProfilePictureController@show');

// AJAX calls
Route::get('/ajax/reply/{post_id}', 'PostController@addReplySection');
Route::post('/ajax/react/{post}', 'ReactionController@react');
Route::get('/ajax/reactions/{post}', 'ReactionController@reactions');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');