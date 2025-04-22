<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function index()
    {
        return view('login');
    }

    function authenticating(Request $request)
    {                                                                   
        $credentials = $request->only('name', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('supers')->with('success', 'Login successful');
        }

        // return back()->with('error', 'Invalid credentials');
        return $request->all();
        
    }

    function showRegister(Request $request){
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            auth()->login($user);
    
            // return $request->all();
            
            return redirect()->route('login')->with('success', 'Registration successful');
        }
    }

    function seeRegister(){
        return view('register');
    }
}
