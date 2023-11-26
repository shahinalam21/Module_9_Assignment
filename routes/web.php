<?php

use App\Http\Controllers\portfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [portfolioController::class, 'index']);
Route::get('/about', [portfolioController::class, 'about']);
Route::get('/service', [portfolioController::class, 'service']);
Route::get('/portfolio', [portfolioController::class, 'portfolio']);
Route::get('/blog', [portfolioController::class, 'blog']);
Route::get('/contact', [portfolioController::class, 'contact']);
