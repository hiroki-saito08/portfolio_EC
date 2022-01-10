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

//商品詳細ページ
Route::get('product/{id}/show', [ProductController::class, 'show'])->name('product.show');
//検索機能
Route::post('search', [ProductController::class, 'search'])->name('product.search');


//ユーザー情報編集ページ
Route::get('{id}/edit', [UserController::class, 'edit'])->name('edit');
// ユーザー情報更新機能
Route::post('{id}/update', [UserController::class, 'update'])->name('update');


//キープページ
Route::get('keep', [KeepController::class, 'index'])->name('keep');
//キープに追加
Route::post('keep/{id}/add', [KeepController::class, 'add'])->name('keep.add');
// キープから削除
Route::post('keep/{id}/delete', [KeepController::class, 'delete'])->name('keep.delete');


//カートページ
Route::get('cart', [CartController::class, 'index'])->name('cart');
//カートに追加
Route::post('cart/{id}/add', [CartController::class, 'add'])->name('cart.add');
//カートから削除
Route::post('cart/{id}/delete', [CartController::class, 'delete'])->name('cart.delete');
//購入確認画面
Route::post('Check', [CartController::class, 'Check'])->name('cart.check');
//商品購入処理
Route::post('cart/{id}/purchase', [CartController::class, 'purchase'])->name('cart.purchase');
//購入完了ページ
Route::get('complete', [CartController::class, 'complete'])->name('cart.complete');
//商品購入履歴ページ
Route::get('history', [CartController::class, 'history'])->name('cart.history');


require __DIR__ . '/auth.php';
