<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::resource('posts', PostController::class);
Route::get('/posts/{post}/comments', 'App\Http\Controllers\PostController@showComments')->name('posts.comments');

Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');

Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
