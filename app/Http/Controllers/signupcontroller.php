<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class signupcontroller extends Controller
{
    public function view(){
        return view('register');
    }

    public function register(Request $request){
        $validate = $request->validate([
            'fname' => ['required'],
            'lname' => ['required'],
            'gender'=> ['required'],
            'password' => ['required','same:confirm_password'],
        ]);

        $new = new User();
        $new->fname = $request->fname;
        $new->lname = $request->lname;
        $new->email = $request->email;
        $new->gender= $request->gender;
        $new->password = Hash::make($request->password);
        $new->save();

        return redirect('login');
    }
}
