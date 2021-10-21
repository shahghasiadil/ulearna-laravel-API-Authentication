<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
   
   public function authenticate(Request $request)
   {
       $credintial = $this->validate($request,[

        'email' => 'required|email',
        'password' => 'required'
       ]);

       if(Auth::attempt($credintial)){
           $request->session()->regenerate();

           return redirect('/');
       }

       return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
       ]);
   }
}
