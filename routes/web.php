<?php

use App\Http\Controllers\Guest\MovieController as GuestMovieController;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
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

Route::get('/', [GuestHomeController::class, 'index'])->name('guest.home');
Route::get('/about', [GuestHomeController::class, 'about'])->name('guest.about');
Route::get('/movies', [GuestMovieController::class, 'index'])->name('guest.movies.index');