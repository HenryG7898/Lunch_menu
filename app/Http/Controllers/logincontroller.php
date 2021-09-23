<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Worker;
use App\Models\Company;

class logincontroller extends Controller
{
    public function view(){
        return view('login');
//        return Company::find(2)->get_info;
    }
    public function login(Request $request)
    {
        $valid = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth::attempt($valid)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records'
        ]);
    }
}
