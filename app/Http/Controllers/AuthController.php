<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Signup Controller---------------------------------------------------------------------- 
    public function register(Request $request){
        $validated_data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'role' => 'required|max:255',
            'password' => 'required|confirmed'
        ]);
        $validated_data['password'] = Hash::make($validated_data['password']);
        $user = User::create($validated_data);
        $token = $user->createToken($request->name);
        return [
            'user' => $user,
            'token' => $token->plainTextToken
        ];
    }

    // Login Controller---------------------------------------------------------------------- 
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return [
                'message' => 'Credentials do not match'
            ];
        }
        $token = $user->createToken($request->email);
        return [
            'user' => $user,
            'token' => $token->plainTextToken
        ];
    }

    // Logout Controller---------------------------------------------------------------------- 
    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return [
            'message' => 'Logout successfully'
        ];
    }
    public function show(Request $request){
        return [
            'name' => $request->user()->name
        ];
    }
    
}