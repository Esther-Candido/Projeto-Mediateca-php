<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //dd($request->all());
        $credentials=$request->validate([
            'email'=> ['required','email'],
            'password'=>'required'
        ]);
        //dd($credentials);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('admin.home'));
        }

        //Se cheguei aqui houve erro no login
        return back()->withErrors([
            'email'=>'Verifique as suas credenciais'
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        //return redirect()->route('landing');
        return to_route('landing');
    }
}
