<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

Route::get('/', [HomeController::class, 'index']);
Route::resource('books', BookController::class);

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/pricing', function () {
    return view('pricing');
});