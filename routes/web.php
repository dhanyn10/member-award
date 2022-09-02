<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\LogoutController;

Route::get('/', [WelcomeController::class, 'show'])->name('welcome');
Route::post('/', [WelcomeController::class, 'login']);

Route::group([
  'middleware' => 'user'
], function () {

  Route::get('award', [AwardController::class, 'show'])->name('award');
  Route::get('add', [CrudController::class, 'showAdd'])->name('add');
  Route::get('auto-add', [CrudController::class, 'autoAdd'])->name('auto-add');
  Route::post('add', [CrudController::class, 'formAdd']);
  Route::post('award', [AwardController::class, 'show']);
});
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
