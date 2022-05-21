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

// Route::resource('post','PostController')->middleware('auth');

// Route::group(['middleware' => 'auth'],function(){
//     Route::resource('post','PostController')->except('index'.'show');
// });

Route::resource('post','PostController')->except('index'.'show')->middleware('auth');
Route::resource('post','PostController')->only('index','show');


Route::post('post/upload','PostController@upload')->name('post.upload');
Route::resource('category','CategoryController');
Route::get('category/{id}/post','postController@postWithCategory')->name('postCategory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('admin/product','ProductController');
// 前台商品列表頁
Route::get('product','ProductController@list')->name('product.list');
// 前台商品內頁
Route::get('product/{id}','ProductController@detail')->name('product.detail');

// 還原商品
Route::get('admin/product/restore/{product}','ProductController@restoreProduct')->name('product.restore');

// 永久刪除商品
Route::post('admin/product/forceDelete','ProductController@forceDelete')->name('product.forceDelete');

// 加入購物車
Route::post('cart','CartController@addToCart')->name('addToCart');

//購物車列表
Route::get('cart/list','CartController@cartList')->name('cartList');

//刪除購物車項目
Route::delete('cart/{cart}','CartController@deleteCartItem')->name('deleteCartItem');
