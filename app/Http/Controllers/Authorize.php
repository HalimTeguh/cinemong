<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Fortify;

class Authorize extends Controller
{
    public function signin(){
        return view('login', 
        [
         'title' => 'Sign in'   
        ]);
    }

    public function signup(){
        return view('register', 
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
            'balance' => '',
            'confirm' => 'required|same:password',
            'level' => ''
        ]);

        User::create($validateData);
        return redirect('/signin');
    }

    public function authenticate(Request $request){
        
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if($user && $user->password == $request->password){
            if($user->level == 1){
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            }else{
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }else{
            return back()->withErrors([
                'loginError' => "Login Gagal" 
            ])->onlyInput('username');
        }
    
        // if(Auth::attempt($credentials)){
            
        //     echo 'True';
        // }else{
        //     $data = Auth::attempt($credentials);
        //     dd($data);
        // }

        
    }
}
