<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

//home
Route::get('/',[PostController::class ,'index'])->name('index');
//show
Route::get('/posts/show/{post}',[PostController::class,'show'])->name('posts.show');

//create and store
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts/store',[PostController::class,'store'])->name('posts.store');

//edit and update
Route::get('/posts/edit/{post}',[PostController::class,'edit'])->name('posts.edit');
Route::put('/edit/{post}',[PostController::class,'update'])->name('posts.update');

//delete
Route::delete('/posts/delete/{post}',[PostController::class,'delete'])->name('posts.delete');

