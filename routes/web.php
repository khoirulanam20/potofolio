<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\HireController;
use Illuminate\Support\Facades\Log;
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

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Auth
Route::resource('users', UserController::class);

// ADMIN routes
Route::group(['middleware' => ['role:admin']], function () {

    Route::resource('articles', ArticleController::class);
    Route::delete('/articles/{article}/delete-image/{image}', [ArticleController::class, 'deleteImage'])->name('articles.deleteImage');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/dashboard/{user}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
    Route::resource('todos', TodoController::class);
});

//auth
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [UserController::class, 'register'])->name('register.post');

Route::post('/submit-hire-request', [HireController::class, 'store'])->name('hire.request');
//auth