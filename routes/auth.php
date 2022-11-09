<?php

use App\Http\Controllers\Auth\UserController as AuthUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// change auth routes froms and routes middleware loaded from \App\Http\kernal
// \Providers\RouteServiceProvider

// * User login
Route::get('/',[AuthUserController::class,'userLoginForm'])->name('userlogin');
Route::post('/',[AuthUserController::class,'userLoginCheck'])->name('userlogin');


Route::get('register', [AuthUserController::class,'userRegistrationForm']);

Route::post('user/registration', [AuthUserController::class,'userRegistrationStore'])->name('userstore');