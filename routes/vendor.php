<?php


use App\Http\Controllers\Vendor\VendorController;
use Illuminate\Support\Facades\Route;

/*
 *  Vendor Routes
 */

Route::get('/dashboard',[VendorController::class,'index'])->name('dashboard');
