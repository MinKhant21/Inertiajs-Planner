<?php

use App\Http\Controllers\DebtController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('Home');
Route::match(['get','post'],'/login',[AuthController::class,'login'])->name('login');
Route::match(['get','post'],'/register',[AuthController::class,'register'])->name('register');
// Route::get('/store',[\App\Http\Controllers\DebtController::class,'showDebt'])->name('debt');
Route::group(['middleware' => 'Auth'],function(){
    Route::match(['get','post'],'/debt',[DebtController::class,'index']);
    Route::get('/debt-store',[DebtController::class,'show']);
});
