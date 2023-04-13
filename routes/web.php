<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\FeatureSectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingSectionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;

Route::get('/', [HomeController::class, 'home']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/about', [HomeController::class, 'about']);


Route::get('/solution', [HomeController::class, 'solution']);

Route::post('/home', [HomeController::class, 'homedb']);


Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::resource('/post', PostController::class);
Route::resource('/service', ServiceController::class);
Route::resource('/featureSection', FeatureSectionController::class);
Route::resource('/slider', SliderController::class);
Route::resource('/bookingSection', BookingSectionController::class);
Route::resource('/aboutSection', AboutSectionController::class);

// Route::prefix('auth')->name('auth.')->middleware(['auth'])->group(function () {
   
// });

