<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Signup Controller---------------------------------------------------------------------- 
    public function register(Request $request){

        $validated_data = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'phone_num' => 'required',

        ]);
        $validated_data['password'] = Hash::make($validated_data['password']);
        $user = User::create($validated_data);
        Auth::login($user);
        
        return redirect()->route('home');
    }

    // Login Controller---------------------------------------------------------------------- 
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()->withErrors([
                'email' => 'Credentials do not match our records.',
            ])->withInput();
        }

        $request->session()->regenerate();

        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('home');
      
    }

    // Logout Controller---------------------------------------------------------------------- 
    public function logout(Request $request){
      if(!Auth::check()){
        return response()->json(['message' => 'you are not login']);
      }
         Auth::logout();
        $request->session()->invalidate(); // destroy session
        $request->session()->regenerateToken(); // prevent CSRF issues

      return redirect()->route('login.submit');
    }

    public function show(Request $request){
        return [
            'name' => $request->user()->name
        ];
    }
    
}