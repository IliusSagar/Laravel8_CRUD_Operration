<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


// CRUD C
Route::get('/add-post',[PostController::class,'addPost'])->name('post.add');

// CRUD C
Route::post('/add-post',[PostController::class,'addPostSubmit'])->name('post.addsubmit');

// CRUD R
Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getAllpost');

// CRUD R
Route::get('/posts/{id}',[PostController::class,'getPostById'])->name('post.getbyid');

// CRUD U
Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');

// CRUD U
Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');

// CRUD D
Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');

