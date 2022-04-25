<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
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
Route::get('/log-ruang', [UserController::class, 'index'])->name('login')->middleware('cek-admin');
Route::post('/log-ruang', [UserController::class, 'login'])->name('login-act');
Route::get('/log-out', [UserController::class, 'logout_'])->name('logout');

// admin
Route::group(['prefix' => 'admin', 'middleware' => 'cek-login'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/galleries', [AdminController::class, 'galleries'])->name('admin.galleries');
    Route::post('/galleries', [AdminController::class, 'storeKategoriGallery'])->name('admin.galleries.store');
    Route::delete('/galleries/{id}', [AdminController::class, 'deleteKategoriGallery'])->name('admin.galleries.delete');
    Route::get('/subgallery/{id}', [AdminController::class, 'getSubGallery'])->name('admin.subgalleries')->where('id', '[0-9]+');
    Route::delete('/subgallery/{id}', [AdminController::class, 'deleteSubGallery'])->name('admin.subgallery.delete')->where('id', '[0-9]+');
    Route::post('/storesubgallery', [AdminController::class, 'storeSubGallery'])->name('admin.storesubgallery');
    Route::resource('/posts', PostController::class);
    Route::get('/published/{post}', [PostController::class, 'published'])->name('post.published');
    Route::get('/category', [PostController::class, 'listCategory'])->name('categorypost.index');
    Route::post('/category', [PostController::class, 'storeCategory'])->name('categorypost.store');
    Route::delete('/category/{category}', [PostController::class, 'deleteCategory'])->name('categorypost.delete');
    Route::get('/list-contact', [AdminController::class, 'listContact'])->name('list-contact');
    Route::delete('/delete-contact/{id}', [AdminController::class, 'deleteContact'])->name('delete-contact');
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

    Route::get('/teams', [AdminController::class, 'listTeam'])->name('admin.team.list');
    Route::delete('/teams/{id}', [AdminController::class, 'destroyTeam'])->name('admin.team.delete');
    Route::get('/teams/create', [AdminController::class, 'createTeam'])->name('admin.team.create');
    Route::post('/teams', [AdminController::class, 'storeTeam'])->name('admin.team.store');
    Route::get('/teams/{tim_creator}/edit', [AdminController::class, 'editTeam'])->name('admin.team.edit');
    Route::patch('/teams/{tim_creator}', [AdminController::class, 'updateTeam'])->name('admin.team.update');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('our-gallery');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact-us', [HomeController::class, 'storeContact'])->name('contact.store');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('post');
Route::get('/blogs/{slug:slug}', [HomeController::class, 'detail_post'])->name('post.detail');
Route::post('/blogs', [HomeController::class, 'blogs'])->name('post.search');
