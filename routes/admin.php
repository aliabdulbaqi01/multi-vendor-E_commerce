<?php

/*
 *  Admin Routes
 */

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Auth\AuthenticateAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
Route::get('/logout',[AuthenticateAdminController::class,'destroy'])->name('logout');


/*
    profile route
*/

Route::get('/profile',[ProfileController::class,'edit'])->name('profile');
Route::post('/profile/update',[ProfileController::class,'update'])->name('profile.update');
