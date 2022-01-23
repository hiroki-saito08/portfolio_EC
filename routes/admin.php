<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AdminController;

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
  return view('admin.welcome');
});

// Route::get('/dashboard', function () {
//   return view('admin.dashboard');
// })->middleware(['auth:admin'])->name('dashboard');


//〜〜管理者が操作できる機能〜〜

//管理者のトップページ
Route::get('/', [ProductController::class, 'index'])->middleware(['auth:admin'])->name('top');

//商品登録ページ表示
Route::get('/product/create', [ProductController::class, 'create'])->middleware(['auth:admin'])->name('product.create');
//商品登録機能
Route::post('/product/store', [ProductController::class, 'store'])->middleware(['auth:admin'])->name('product.store');
//商品編集ページ表示
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->middleware(['auth:admin'])->name('product.edit');
//商品編集機能
Route::post('/product/{id}/update', [ProductController::class, 'update'])->middleware(['auth:admin'])->name('product.update');
// 商品削除機能
Route::post('/product/{id}/delete', [ProductController::class, 'destroy'])->middleware(['auth:admin'])->name('product.delete');


//管理者情報編集ページ
Route::get('{id}/edit', [AdminController::class, 'edit'])->name('edit');
//管理者情報更新機能
Route::post('{id}/update', [AdminController::class, 'update'])->name('update');




// 以下はAuth.phpの内容をコピーしadmin用に編集したもの

// ここの内容をログインしてる時のみ新規ユーザーを作成できるように書き換え
Route::get('/register', [RegisteredUserController::class, 'create'])
  ->middleware('auth:admin')
  ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
  ->middleware('auth:admin');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
  ->middleware('guest')
  ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
  ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
  ->middleware('guest')
  ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
  ->middleware('guest')
  ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
  ->middleware('guest')
  ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
  ->middleware('guest')
  ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
  ->middleware('auth:admin')
  ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
  ->middleware(['auth:admin', 'signed', 'throttle:6,1'])
  ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
  ->middleware(['auth:admin', 'throttle:6,1'])
  ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
  ->middleware('auth:admin')
  ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
  ->middleware('auth:admin');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
  ->middleware('auth:admin')
  ->name('logout');
