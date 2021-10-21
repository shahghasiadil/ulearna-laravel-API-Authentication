<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiAuthenticationController extends Controller
{
    //
    public function register(Request $request){
        // return $request;
        $validated = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            "email" => $request->email,
            "name" => $request->name,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('my-token')->plainTextToken;

        $response = [
            'token' => $token,
        ];
        return $response;
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens->delete();

        return "Logout";
    }

    public function login(Request $request)
    {
       
        $valdited = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email',$request->email)->first();
        // return $user;
        if(!$user || !Hash::check($valdited['password'],$user->password)){
            return response(['status'=>false,'message'=>'invalid email or password'],401);
        }

        $token = $user->createToken('my-token')->plainTextToken;

        $response = [
            'token' => $token,
        ];
        return $response;

    }
}
