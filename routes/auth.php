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


Route::get('register', [AuthUserController::class,'userRegistrationForm']);

Route::post('user/registration', [AuthUserController::class,'userRegistrationStore'])->name('userstore');



// Route::group(['middleware'=>AdminMiddleware::class],function(){
//     Route::prefix('admin')->group(function(){
//         Route::get('/dashboard', [dash::class,'adminDashboard'])->name('admin.dashboard');
//         /* settings */
//         Route::resource('users',user::class,['as'=>'admin']);
//         Route::resource('admin',admin::class,['as'=>'admin']);
//         Route::resource('country',country::class,['as'=>'admin']);
//         Route::resource('division',division::class,['as'=>'admin']);
//         Route::resource('district',district::class,['as'=>'admin']);
        
//     });
// });