<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pengguna;

Route::get('/', function () {
    return view('home');
});

Route::post('/register', [Pengguna::class, 'register']);
Route::post('/logout', [Pengguna::class, 'logout']);
Route::post('/login', [Pengguna::class, 'login']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});