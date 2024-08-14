<?php

use App\Http\Controllers\PubController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PubController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
