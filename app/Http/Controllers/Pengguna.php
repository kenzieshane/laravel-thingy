<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pengguna extends Controller
{
    public function register(): string {
        $request = request();
        $incomingFields = $request->validate(rules: [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
        ]);
        return 'hello from our controller!';
    }
}
