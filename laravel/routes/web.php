<?php

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('about',function(){
//     return view('about');
// });
// Route::get('about','TestController@index');
// Route::get('product/{id}','TestController@product');

// Route::get('post','PostController@index')->name('post.index');
// Route::get('post/create','PostController@create')->name('post.create');
// Route::post('post','PostController@store')->name('post.store');
// Route::get('post/{id}','PostController@show')->name('post.show');
// Route::get('post/{id}/edit','PostController@edit')->name('post.edit');
// Route::put('post/{id}','PostController@update')->name('post.update');
// Route::delete('post/{id}','PostController@delete')->name('post.delete');

Route::resource('post','PostController');
Route::post('post/upload','PostController@upload')->name('post.upload');
