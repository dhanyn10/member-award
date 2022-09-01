<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\LogoutController;

Route::get('/', [WelcomeController::class, 'show'])->name('welcome');
Route::get('award', [AwardController::class, 'show'])->name('award');
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
Route::post('/', [WelcomeController::class, 'login']);
