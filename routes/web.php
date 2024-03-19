<?php

use App\Http\Controllers\WebSite\AboutController;
use App\Http\Controllers\WebSite\WhyUsController;
use App\Http\Controllers\WebSite\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Home
Route::get('/', [HomeController::class , 'index'])->name('welcome');
// Why Us
Route::get('/whyus', [WhyUsController::class , 'index'])->name('whyUs');

// About
Route::get('/about', [AboutController::class , 'index'])->name('about');