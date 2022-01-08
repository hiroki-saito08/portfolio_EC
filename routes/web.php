<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ProductController;

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


//〜〜ユーザーが操作できる機能〜〜

//ユーザーのトップページ
Route::get('/', [ProductController::class, 'index'])->name('index');

//ユーザー情報編集
Route::get('user/edit', 'UserController@edit')->name('edit');
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

require __DIR__ . '/auth.php';
