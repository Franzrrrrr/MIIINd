<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn () => view('home'));
Route::get('/contact', fn () => view('contact'));
Route::get('/about', fn () => view('about'));
Route::get('/gallery', fn () => view('gallery'));
    
