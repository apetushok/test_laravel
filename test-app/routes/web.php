<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

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

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('throttle:5,1');
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/post/{post:slug}', 'single')->name('post');
});

Route::middleware(['auth'])
    ->controller(PostController::class)
    ->group(function () {
    Route::get('/create', 'createForm')->name('create_form');
    Route::post('/store', 'store')->name('store');
    Route::get('/profile', 'profile')->name('profile');//->middleware('can:view');
});
