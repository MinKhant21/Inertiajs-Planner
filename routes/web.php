<?php

use App\Http\Controllers\DebtController;
use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('Home');
// Route::get('/store',[\App\Http\Controllers\DebtController::class,'showDebt'])->name('debt');
Route::match(['get','post'],'/debt',[DebtController::class,'index']);
Route::get('/debt-store',[DebtController::class,'show']);
