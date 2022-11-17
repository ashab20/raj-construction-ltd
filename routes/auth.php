<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RoleRouteController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Builder\DocumentController;
use App\Http\Controllers\Builder\DesignController;
use App\Http\Controllers\Builder\DesignationController;
use App\Http\Controllers\Builder\FloorDetailsController;
use App\Http\Controllers\Builder\FlatDetailController;
use App\Http\Controllers\Builder\FloorbudgetController;
use App\Http\Controllers\Builder\MaterialController as BuilderMaterialController;
use App\Http\Controllers\Builder\MaterialDetailController;
use App\Http\Controllers\Location\CountryController;
use App\Http\Controllers\Lands\LandController;
use App\Http\Controllers\Location\DistrictController;
use App\Http\Controllers\Location\DivisionController;
use App\Http\Controllers\Projects\ProjectsController;
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

        // Locations
        Route::resource('country', CountryController::class);
        Route::resource('division', DivisionController::class);
        Route::resource('district', DistrictController::class);

        // Create Users
        Route::resource('member', UserController::class);
        
        Route::get('/adms', [RoleRouteController::class,'admins'])->name('admins');

        Route::resource('project', ProjectsController::class);


        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('admin.dashboard');

        // Route::get('/account?id={$id}', function ($id) {
        //     return view('profile.account');
        // })->name('account');



        Route::resource('/document',DocumentController::class);
        Route::resource('/land',LandController::class);
        Route::resource('/floorDetails',FloorDetailsController::class);
        Route::resource('/flatDetail',FlatDetailController::class);
        Route::resource('/design',DesignController::class);        
        Route::resource('/designation',DesignationController::class);        

        Route::resource('/material',BuilderMaterialController::class);
        Route::resource('/materialDetails',MaterialDetailController::class);
        Route::resource('/floorBudget',FloorbudgetController::class);
        
    });
});