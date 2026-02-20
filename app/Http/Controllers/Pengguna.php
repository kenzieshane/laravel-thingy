<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class Pengguna extends Controller
{
    public function login() {

        $request = request();

        $incomingFields = $request->validate(rules: [
            'loginname' => ['required'],
            'loginpassword' => ['required'],
        ]);

        if (auth()->attempt(['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
        }

        return redirect ('/');
    }

    public function register(): string {
        $request = request();
        
        $incomingFields = $request->validate(rules: [
            'name' => ['required','min:3','max:10',Rule::unique('users','name')],
            'password' => ['required','min:3','max:200',Rule::unique('users','email')],
            'email' => ['required','email'],
        ]);

        $incomingFields['password'] = bcrypt($request->password);
        $user = User::create($incomingFields);

        auth()->login($user);

        return redirect('/');
    }

    public function logout(): string {
    auth()->logout();
    return redirect('/');
    }
}
