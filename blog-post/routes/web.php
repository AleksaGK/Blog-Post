<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);


// Route::get('posts', [PostTestController::class, 'index']);

// Route::get('posts/{id}', [PostTestController::class, 'show']);

// Route::resource('/posts', PostController::class);
// Route::get('/users/{id}/posts', [UserPostController::class, 'index'])->name('users.posts.index');

Route::resource('users.posts', UserPostController::class)->only(['index']);
