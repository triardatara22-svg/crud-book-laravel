<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController; // tambahin ini

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class); // tambahin ini