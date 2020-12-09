<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjmenController;

Route::get('/master', [EjmenController::class, 'master']);
Route::get('/nav', [EjmenController::class, 'nav']);
Route::get('/about', [EjmenController::class, 'about']);
Route::get('/list', [EjmenController::class, 'list']);