<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\MovieController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Movie
Route::get('/movies/page/{page}', [MovieController::class, 'index'])->name('movie.index');
Route::get('movie/show/{movie}', [MovieController::class, 'show'])->name('movie.show');

// TV Show
Route::get('/tvs/page/{page}', [TvController::class, 'index'])->name('tv.index');
Route::get('tv/show/{tv}', [TvController::class, 'show'])->name('tv.show');

// Actors
Route::get('/actors/page/{page}', [ActorController::class, 'index'])->name('actor.index');
Route::get('actor/show/{actor}', [ActorController::class, 'show'])->name('actor.show');