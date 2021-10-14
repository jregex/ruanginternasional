<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Login
Route::get('/log-ruang', [UserController::class, 'index'])->name('login');
Route::post('/log-ruang', [UserController::class, 'login'])->name('login-act');
Route::get('/log-out', [UserController::class, 'logout_'])->name('logout');
// admin
Route::group(['prefix' => 'admin', 'middleware' => 'cek-login'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
});
