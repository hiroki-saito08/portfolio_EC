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

Route::get('/dashboard', function () {
  return view('admin.dashboard');
})->middleware(['auth:admin'])->name('dashboard');


//〜〜管理者が操作できる機能〜〜

//管理者の商品投稿ページ
Route::get('/top', [ProductController::class, 'index'])->middleware(['auth:admin'])->name('index');

//商品登録
Route::get('admin/product/create', 'ProductController@create')->name('create');
Route::post('admin/product/store', 'ProductController@store');
Route::get('admin/product/{id}/edit', 'ProductController@edit')->name('edit');
Route::post('admin/product/update', 'ProductController@update');



// 以下はAuth.phpの内容をコピーしadmin用に編集したもの
Route::get('/register', [RegisteredUserController::class, 'create'])
  ->middleware('guest')
  ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
  ->middleware('guest');

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
