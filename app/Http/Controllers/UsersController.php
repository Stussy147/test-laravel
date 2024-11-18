<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function Show_signin()
    {
        return view('signin');
    }
    public function Show_signup()
    {
        return view('signup');
    }
    public function signin(request $request)
    {
        $request->validate([
            'login' => 'requaired|string',
            'password' => 'requaired'
        ]);
    }
    public function signup(request $request)
    {
        $request->validate([
            'login' => 'requaired|string|unique:users',
            'password' => 'requaired|min:6',
            'name' => 'string',
            'phone' => 'number|max:11',
            'email' => 'requaired|email|unique:users'

        ]);
        $user = Users::create([
            'login' => $request->login,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email

        ]);
        auth::login($user);
        return redirect()->route('index');

    }
    public function logout()
    {
        auth::logout();
        return redirect()->route('index');
    }
}
