<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainHomeController;

 Route::get('/', [MainHomeController::class, 'index'])->name('main-home');
