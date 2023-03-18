<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\http\Controllers\CategorytController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/dashboard/post', PostController::class)->middleware('auth');
Route::resource('/dashboard/category', CategorytController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/dashboard/user', UserController::class)->middleware('auth');