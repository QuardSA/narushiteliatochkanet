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

Route::get('/application',[UserController::class, 'getApp']);

Route::post('/application-create',[UserController::class, 'app_create']);

Route::post('/user/change',[UserController::class, 'user_change'])->name('user_change');

Route::get('/admin',[AdminController::class, 'index'])->name('admin');

Route::get('/admin/deny',[AdminController::class, 'deny'])->name('admin.deny');

Route::get('/admin/success', [AdminController::class, 'success'])->name('admin.success');

Route::get('sign_out',[UserController::class, 'sign_out']);

Route::get('/personal-data',[UserController::class, 'personal'])->name('personal');

Route::get('admin/{id}/application_Deny_button',[AdminController::class, 'application_Deny_button']);

Route::get('admin/{id}/application_Success_button',[AdminController::class, 'application_Success_button']);
