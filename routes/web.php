<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/store',[\App\Http\Controllers\DebtController::class,'showDebt'])->name('debt');
