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

// admin users
Route::group(['prefix' => 'users', 'middleware' => 'cek-login'], function () {
    Route::get('/', [UserController::class, 'list'])->name('users.list');
    Route::get('/create', [UserController::class, 'addUser'])->name('users.add');
    Route::post('/', [UserController::class, 'storeUser'])->name('users.store');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.delete')->where('id', '[0-9]+');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit')->where('id', '[0-9]+');
    Route::patch('/{id}', [UserController::class, 'update'])->name('users.update')->where('id', '[0-9]+');
    Route::get('/change-password', [UserController::class, 'change_password'])->name('users.changePassword');
    Route::post('/change-password', [UserController::class, 'change'])->name('users.change');

    Route::get('/profile', [UserController::class, 'myprofile'])->name('users.profile');
    Route::patch('/profile/{id}', [UserController::class, 'updateProfil'])->name('users.update-profil')->where('id', '[0-9]+');
});
