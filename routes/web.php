<?php

use App\Http\Controllers\Pengguna;

Route::get('/', function () {
    return view('home');
});

Route::post('/register', [Pengguna::class, 'register']);
