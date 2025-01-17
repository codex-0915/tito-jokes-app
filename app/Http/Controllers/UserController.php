<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Resources\Views\Pages;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    // Shows the registration form/page
    public function create() {
        return view('users.register');
    }

    // Shows the log in page
    public function login() {
        return view('users.login');
    }

    // Create new user
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');

    }

    
}
