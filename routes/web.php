<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\AuthController;

Route::get('/', function(){
    return view('auth.login');
});

Route::get('/dashboard', [MainHomeController::class, 'index'])->name('main-home');
Route::post('/login', [AuthController::class, 'login']);