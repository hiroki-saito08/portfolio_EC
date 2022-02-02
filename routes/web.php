<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\KeepController;
use App\Http\Controllers\User\CartController;

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

// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// })->middleware(['auth:users'])->name('dashboard');


//〜〜ユーザーが操作できる機能〜〜

//ユーザーのトップページ
Route::get('/', [ProductController::class, 'index'])->name('top');

// 商品一覧ページ
Route::get('products', [ProductController::class, 'products'])->name('products');
//商品詳細ページ
Route::get('product/{id}/show', [ProductController::class, 'show'])->name('product.show');
//検索機能
Route::get('search', [ProductController::class, 'search'])->name('product.search');
// aタグからの送信
Route::get('{category}/{gender}/search', [ProductController::class, 'a_search'])->name('product.a_search');


//ユーザー情報編集ページ
Route::get('{id}/edit', [UserController::class, 'edit'])->middleware(['auth:users'])->name('edit');
// ユーザー情報更新機能
Route::post('{id}/update', [UserController::class, 'update'])->middleware(['auth:users'])->name('update');


//キープページ
Route::get('keep', [KeepController::class, 'index'])->middleware(['auth:users'])->name('keep');
//キープに追加
Route::post('keep/{id}/add', [KeepController::class, 'add'])->middleware(['auth:users'])->name('keep.add');
// キープから削除
Route::post('keep/{id}/delete', [KeepController::class, 'delete'])->middleware(['auth:users'])->name('keep.delete');


//カートページ
Route::get('cart', [CartController::class, 'index'])->middleware(['auth:users'])->name('cart');
//カートに追加
Route::post('cart/{id}/add', [CartController::class, 'add'])->middleware(['auth:users'])->name('cart.add');
//カートから削除
Route::post('cart/{id}/delete', [CartController::class, 'delete'])->middleware(['auth:users'])->name('cart.delete');
//購入確認画面
Route::post('check', [CartController::class, 'check'])->middleware(['auth:users'])->name('cart.check');
//商品購入処理
Route::post('cart/purchase', [CartController::class, 'purchase'])->middleware(['auth:users'])->name('cart.purchase');
//購入完了ページ
Route::get('completed', [CartController::class, 'completed'])->middleware(['auth:users'])->name('cart.completed');
//商品購入履歴ページ
Route::get('history', [CartController::class, 'history'])->middleware(['auth:users'])->name('cart.history');


require __DIR__ . '/auth.php';
