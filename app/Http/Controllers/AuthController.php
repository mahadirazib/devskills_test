<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Models\User;


class AuthController extends Controller
{
    
    public function home()
    {
        return view('home');
    }

    
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'username' => 'required|regex:/^[a-zA-Z0-9_]+$/|unique:users,username|max:30|min:3',
            'phone' => 'nullable|string|max:15',
            'is_admin' => 'nullable|boolean',
            'password' => 'required|string|min:8',
        ]);


        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'username' => $validatedData['username'],
            'phone' => $validatedData['phone'] ?? null,
            'is_admin' => $validatedData['is_admin'] ?? false,
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('home');

    }

    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    
    public function login(Request $request)
    {
        // dd("Working...");
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
    
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }
    

    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }




}
