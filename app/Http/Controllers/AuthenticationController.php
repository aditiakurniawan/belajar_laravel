<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login()
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt(['email'=> $request->email,'password'=> $request->password])) {
            return response()->json([
                "success" => false,
                "code"=> 401,
                "message" => "Credentials Error",
                "data" => $validator->errors()
            ],401);
        }

        $user = Auth::user();
        $token= $user->createToken('Laravel123');
        return response()->json([
            "success" => true,
            "code"=> 200,
            "message" => "Login successfully",
            "data" => [
                "email"=> $user->email,
                "token"=> $token->plainTextToken
            ]
        ],200);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout ()
    {
        return view('auth.logout');
    }
}
