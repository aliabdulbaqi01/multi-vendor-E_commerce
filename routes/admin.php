<?php

/*
 *  Admin Routes
 */

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthenticateAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
Route::get('/logout',[AuthenticateAdminController::class,'destroy'])->name('logout');
