<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Builder\DocumentController;
use App\Http\Controllers\Auth\UserController;
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
        Route::get('members', [UserController::class,'index'])->name('members');

        Route::get('members/add', [UserController::class,'adduserform'])->name('addmembers');

        Route::post('members/add', [UserController::class,'adduserstore'])->name('members');


        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('admin.dashboard');

        Route::get('/account', function () {
            return view('profile.account');
        })->name('admin.account');


        Route::resource('/document', DocumentController::class);

        // Constructions


    });
});
