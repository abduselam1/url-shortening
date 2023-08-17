<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function login(Request $request)
    {

        $request->validate([
            'email' =>'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::where('email',$request->email)->first();
        
        if($user){
            return response(
                [
                    'token' => $user->createToken($request->ip())->plainTextToken,
                    'user' => $user
                ]
            );
        }
        throw ValidationException::withMessages([
            'email' => ['This credential doesn\'t. match to out record'],
        ]);

    }


    public function register(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'name' =>'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            throw ValidationException::withMessages([
                'email' => ['This email is already taken please try again or login'],
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response(
            [
                'token' => $user->createToken($request->ip())->plainTextToken,
                'user' => $user
            ]
        );
        
    }

    public function logout(Request $request){

        $request->user()->currentAccessToken()->delete();

        return response(true);
    }
    
}
