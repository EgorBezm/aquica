<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\UserTagController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [MainController::class, 'main'])->name('home');
    Route::get('user', [MainController::class, 'user'])->name('user');
    Route::get('repository', [MainController::class, 'storage'])->name('storage');
    Route::get('admin', [MainController::class, 'admin'])->middleware('admin')->name('admin');
});

Route::get('welcome', [MainController::class, 'welcome'])->name('login');

Route::get('signup', [MainController::class, 'signup'])->name('signup');
Route::post('signup', [RegisterController::class, 'register'])->name('register');

Route::prefix('login')->group(function () {

    Route::get('/', [MainController::class, 'login'])->name('login-page');
    Route::post('/', [LoginController::class, 'login'])->name('login-page');

    Route::get('forgot', [MainController::class, 'forgot'])->name('forgot');
    Route::post('forgot', [ForgotPasswordController::class, 'index'])->name('forgot');

    Route::get('reset-password', [ResetPasswordController::class, 'index'])->name('reset');
    Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('reset');

    Route::post('user-tag', [UserTagController::class, 'store'])->name('user-tag');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

});

Route::prefix('test')->group(function () {
    Route::get('/', function () {
        return view('fordevelopment');
    });

    Route::get('main', function () {
        return view('main');
    });

    Route::get('welcome', function () {
        return view('welcome');
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
            return view('login/settings', [
                'tags' => \App\Models\Tag::all(),
            ]);
        });

        Route::get('/signup', function () {
            return view('login/signup');
        });

        Route::get('/reset-password', function () {
            return view('login/reset-password', ['token' => '123']);
        });
    });
});
