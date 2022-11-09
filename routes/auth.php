<?php

use App\Http\Controllers\Auth\UserController as AuthUserController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

// change auth routes froms and routes middleware loaded from \App\Http\kernal
// \Providers\RouteServiceProvider

// * User login
Route::get('/',[AuthUserController::class,'userLoginForm'])->name('userlogin');
Route::post('/',[AuthUserController::class,'userLoginCheck'])->name('userlogin');


Route::get('register', [AuthUserController::class,'userRegistrationForm'])->name('userstore');

Route::post('register', [AuthUserController::class,'userRegistrationStore'])->name('userstore');
Route::post('logout', [AuthUserController::class,'logOut'])->name('logout');




Route::group(['middleware'=>AdminMiddleware::class],function(){
    Route::prefix('admin')->group(function(){
        // Route::get('/dashboard', [dash::class,'adminDashboard'])->name('admin.dashboard');
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('admin.dashboard');
        
    });
});
