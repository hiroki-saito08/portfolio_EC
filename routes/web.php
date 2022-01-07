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

// Route::get('/', function () {
//     return view('user.top');
// });

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

require __DIR__ . '/auth.php';

//管理者ログイン
Route::get('admin/login', 'Admin\LoginController@loginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login');
Route::post('admin/logout', 'Admin\LoginController@logout');

//商品登録
Route::get('admin/home', 'Admin\ProductController@index')->name('admin.index');
Route::get('admin/product/create', 'Admin\ProductController@create')->name('admin.create');
Route::post('admin/product/store', 'Admin\ProductController@store');
Route::get('admin/product/{id}/edit', 'Admin\ProductController@edit')->name('admin.edit');
Route::post('admin/product/update', 'Admin\ProductController@update');

//〜〜ユーザーが操作できる機能〜〜

//ユーザーログイン
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//ユーザーのトップページ
Route::get('/', 'ProductController@index')->name('index');

//ユーザー情報編集
Route::get('user/edit', 'UserController@edit')->name('user.edit');
Route::post('user/update', 'UserController@update');

//商品詳細ページ
// Route::get('product/{id}/show', 'ProductController@show')->name('product.show');

//検索機能
Route::get('search', 'ProductController@search')->name('product.search');
Route::post('search', 'ProductController@search');

//カート機能
Route::post('cart/{id}/add', 'CartController@add')->name('cart.add');
Route::post('cart/{id}/delete', 'CartController@delete')->name('cart.delete');

//キープ機能
Route::post('keep/{id}/add', 'KeepController@add')->name('keep.add');
Route::post('keep/{id}/delete', 'KeepController@delete');

//商品購入
Route::post('product/{id}/purchase', 'ProductController@add');

//カートページ
Route::get('cart', 'CartController@index')->name('product.cart');

//キープページ
Route::get('/products/keep', 'KeepController@index')->name('product.keep');

//商品購入履歴ページ
Route::get('/products/history', 'ProductController@history')->name('product.history');

//最終確認画面
Route::post('Check', 'ProductController@Check')->name('product.check');

//購入完了ページ
Route::get('complete', 'ProductController@complete')->name('product.complete');
