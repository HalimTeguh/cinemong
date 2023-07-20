<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Authorize extends Controller
{
    public function signin(){
        return view('register', 
        [
         'title' => 'Sign in'   
        ]);
    }

    public function signup(){
        return view('login', 
        [
         'title' => 'Sign in'   
        ]);
    }

    public function createUser(Request $request){
        $validateData = $request->validate([
            'username' => 'required|min:3|unique:users',
            'name' => 'required',
            'birth' => 'required|date',
            'password' => 'required|min:8',
            'confirm' => 'required|same:password',
            'level' => ''
        ]);

        User::create($validateData);
        return redirect('/login');
    }
}
