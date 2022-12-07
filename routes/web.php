<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Builder\DocumentController;


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('register', function () {
//     return view('auth.register');
// });


Route::get('react',function(){
    return view('index');
});

