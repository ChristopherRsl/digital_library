<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //show register form
    public function create(){
        return view('users.register');
    }

    // register user
    public function register(Request $request){
        $formfields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'role'=> 'required'
        ]);

        $formfields['password'] = bcrypt($formfields['password']);

        //create user
        $user = User::create($formfields);

        //login
        auth()->login($user);

        return redirect('/')->with('message', 'User Created Successfully');
    }

    //user logout
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have successfully logged out.');

    }

    //show login form
    public function login(){
        return view('users.login');
    }

    //user login
    public function auth(Request $request){
        $formfields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formfields)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You have successfully logged in.');
        }

        return back()->withErrors(['email' => 'Email or Password is Invalid'])->onlyInput('email');
    }
}
