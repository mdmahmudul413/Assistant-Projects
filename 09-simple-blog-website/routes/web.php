<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;

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

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/website/blog/detail/{id}', [WebsiteController::class, 'detail'])->name('detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/tag/add', [TagController::class, 'index'])->name('tag.add');
    Route::post('/tag/create', [TagController::class, 'create'])->name('tag.create');
    Route::get('/tag/manage', [TagController::class, 'manage'])->name('tag.manage');
    Route::get('/tag/edit/{id}', [TagController::class, 'edit'])->name('tag.edit');
    Route::post('/tag/update/{id}', [TagController::class, 'update'])->name('tag.update');
    Route::get('/tag/delete/{id}', [TagController::class, 'delete'])->name('tag.delete');

    Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    
    Route::get('/blog/add', [BlogController::class, 'index'])->name('blog.add');
    Route::post('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::get('/blog/manage', [BlogController::class, 'manage'])->name('blog.manage');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
    Route::get('/blog/detail/{id}', [BlogController::class, 'detail'])->name('blog.detail');

    // Route::get('/user/add-user', [UserController::class, 'index'])->name('user.add');
    // Route::post('/user/new-user', [UserController::class, 'create'])->name('user.new-user');
    // Route::get('/user/manage-user', [UserController::class, 'manage'])->name('user.manage');

    Route::get('/user/add', [UserController::class, 'index'])->name('user.add');
    Route::post('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/user/manage', [UserController::class, 'manage'])->name('user.manage');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
});
