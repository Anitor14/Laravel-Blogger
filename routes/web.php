<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\PostLikeController;

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);  

Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/dashboard' , [DashboardController::class, 'index'])->name('dashboard');

Route::get('/home' , [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts{post}', [PostController::class, 'demolish'])->name('posts.delete');

Route::post('/posts/{post}/likes' , [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes',[PostLikeController::class,'demolish'])->name('posts.likes');

Route::get('/', function () {
    return view('home');
});