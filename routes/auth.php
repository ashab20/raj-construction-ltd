<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Builder\DocumentController;
use App\Http\Controllers\Land\LandController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

// change auth routes froms and routes middleware loaded from \App\Http\kernal
// \Providers\RouteServiceProvider

// * User login
Route::get('/', [AuthController::class, 'userLoginForm'])->name('userlogin');
Route::post('/', [AuthController::class, 'userLoginCheck'])->name('userlogin');


Route::get('register', [UserController::class, 'userRegistrationForm'])->name('userstore');

Route::post('register', [UserController::class, 'userRegistrationStore'])->name('userstore');

Route::get('logout', [AuthController::class, 'logOut'])->name('logout');




Route::group(['middleware' => AdminMiddleware::class], function () {
    Route::prefix('admin')->group(function () {

        // Create Users
        Route::resource('members', UserController::class);


        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('admin.dashboard');

        Route::get('/account', function () {
            return view('profile.account');
        })->name('admin.account');



        Route::resource('/document',DocumentController::class);
        Route::resource('/land',LandController::class);
        
    });
});
