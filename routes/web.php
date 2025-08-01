<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;



Route::resource('books', BookController::class);

Route::get('/',[HomeController::class, 'index']);


