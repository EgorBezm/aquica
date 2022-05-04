<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\MainController;
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



Route::get('/', [MainController::class, 'main'])->middleware('auth')->name('home');

Route::get('welcome', [MainController::class, 'welcome'])->name('login');

Route::get('signup', [MainController::class, 'signup'])->name('signup');
Route::post('signup', [RegisterController::class, 'register'])->name('register');

Route::get('login', [MainController::class, 'login'])->name('login-page');
Route::post('login', [LoginController::class, 'login'])->name('login-page');

Route::get('login/forgot', [MainController::class, 'forgot'])->name('forgot');
Route::post('login/forgot', [ForgotPasswordController::class, 'index'])->name('forgot');

Route::get('login/reset-password', [ResetPasswordController::class, 'index'])->name('reset');
Route::post('login/reset-password', [ResetPasswordController::class, 'reset'])->name('reset');


Route::get('main', function () {
    return view('main');
});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('user/user');
    });

    Route::get('/user', function () {
        return view('user/user');
    });

    Route::get('/admin', function () {
        return view('user/admin');
    });

    Route::get('/storage', function () {
        return view('user/storage');
    });
});

Route::prefix('login')->group(function () {
    Route::get('/', function () {
        return view('login/login');
    });

    Route::get('/login', function () {
        return view('login/login');
    });

    Route::get('/forgot', function () {
        return view('login/forgot');
    });

    Route::get('/settings', function () {
        return view('login/settings');
    });

    Route::get('/signup', function () {
        return view('login/signup');
    });

});
