
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
    return view('layouts.app');
});

Route::get('/posts', 'PostController@index')->name('posts.index')->middleware('auth');
Route::get('posts/create', 'PostController@create')->name('posts.create')->middleware('auth');
Route::post('posts', 'PostController@store')->name('posts.store')->middleware('auth');
Route::get('posts/{id}', 'PostController@show')->name('posts.show')->middleware('auth');
Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit')->middleware('auth');
Route::put('posts/{id}', 'PostController@update')->name('posts.update')->middleware('auth');

Route::delete('posts/{id}', 'PostController@destroy')->name('posts.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');