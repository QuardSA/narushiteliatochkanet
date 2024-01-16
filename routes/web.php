<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[UserController::class, 'index'])->name('index');

Route::get('/signin',[UserController::class, 'signin'])->name('signin');

Route::get('/signup',[UserController::class, 'signup'])->name('signup');

Route::post('/signin_valid',[UserController::class, 'signin_valid']);

Route::post('/signup_valid',[UserController::class, 'signup_valid']);

Route::get('/applications',[UserController::class, 'getApp'])->name('getApp');

Route::post('/applications/create',[UserController::class, 'app_create'])->name('app_create');

Route::post('/user/change',[UserController::class, 'user_change'])->name('user_change');

Route::get('/admin',[AdminController::class, 'index'])->name('index');

Route::post('/application/{id}/status/change',[UserController::class, 'app_status_change'])->name('app_status_change');

Route::post('/sign_out',[UserController::class, 'sign_out']);