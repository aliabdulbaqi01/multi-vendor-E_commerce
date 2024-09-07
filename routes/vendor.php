<?php


use App\Http\Controllers\Vendor\ProfileController;
use App\Http\Controllers\Vendor\VendorController;
use Illuminate\Support\Facades\Route;

/*
 *  Vendor Routes
 */

Route::get('/dashboard',[VendorController::class,'index'])->name('dashboard');

/*
 *  Profile
 */
Route::get('/profile',[ProfileController::class,'edit'])->name('profile.edit');
Route::put('/profile',[ProfileController::class,'update'])->name('profile.update');
Route::put('/profile/password',[ProfileController::class,'updatePassword'])->name('profile.update.password');
