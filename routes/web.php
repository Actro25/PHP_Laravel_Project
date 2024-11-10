<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('home');

Route::get('/authors', [App\Http\Controllers\PostController::class, 'index']);
Route::get("/authors/{post}/edit", [App\Http\Controllers\PostController::class, 'edit']);
Route::put("/authors/{post}", [App\Http\Controllers\PostController::class, 'update']);

Route::get('/authors/create', [App\Http\Controllers\PostController::class, 'create']); 

Route::post('/authors', [App\Http\Controllers\PostController::class, 'store']);

Route::get('/authors/read/{post}', [App\Http\Controllers\MainController::class, 'read']);

Route::delete('/authors/{post}', [App\Http\Controllers\PostController::class, 'destroy']);

//Route::resource('authors', App\Http\Controllers\PostController::class);