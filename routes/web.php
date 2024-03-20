<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/',[TaskController::class, 'index'])->name('index');
Route::post('/store',[TaskController::class,'store'])->name('store');
