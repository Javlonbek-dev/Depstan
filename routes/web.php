<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('articles', App\Http\Controllers\ArticleController::class)->except('show');

Route::resource('categories', App\Http\Controllers\CategoryController::class)->except('show');

Route::resource('tags', App\Http\Controllers\TagController::class)->except('show');

Route::resource('comments', App\Http\Controllers\CommentController::class)->except('show');
