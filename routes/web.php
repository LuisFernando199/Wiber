<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'showPosts'])->name('home');
Route::get('/todas', [App\Http\Controllers\HomeController::class, 'showAllPosts'])->name('todas');
Route::get('/categoria/{category}', [App\Http\Controllers\HomeController::class, 'showPostsByCategory'])->name('categoria');



Auth::routes();
