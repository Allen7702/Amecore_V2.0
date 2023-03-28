<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'home']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/about', [HomeController::class, 'about']);


Route::get('/solution', [HomeController::class, 'solution']);

Route::post('/home', [HomeController::class, 'homedb']);

