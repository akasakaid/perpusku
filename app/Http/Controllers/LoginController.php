<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(){
        return view('signin');
    }

    public function authentication(Request $request){
        $credentials = $request->validate([
            "email" => "required|email:dns",
            "password" => "required"
        ]);
        $starto = Auth::attempt($credentials);
        if ($starto){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with("login_error","email or password not valid !");
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
