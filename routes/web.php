<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
Route::post('/movies/{id}/add-to-favorites', [MovieController::class, 'addToFavorites'])->name('movies.addToFavorites');

Route::delete('/movies/{id}/remove-from-favorites', [MovieController::class, 'removeFromFavorites'])->name('movies.removeFromFavorites');
Route::get('/favorites', [UserController::class, 'favorites'])->name('user.favorites');
