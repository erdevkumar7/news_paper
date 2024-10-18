<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('register', [AdminController::class, 'register'])->name(('admin.register'));
    Route::post('register', [AdminController::class, 'registerSubmit'])->name('admin.registerSubmit');

    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminController::class, 'loginSubmit'])->name('admin.loginSubmit');

   
   
    Route::middleware('admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard'); 
        Route::get('all-user', [AdminController::class, 'allUser'])->name('admin.alluser');
        Route::get('add-user', [AdminController::class, 'adduser'])->name('admin.adduser');
        Route::post('add-user', [AdminController::class, 'adduserSubmit'])->name('admin.adduserSubmit');

        Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});


