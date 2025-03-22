<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if(!empty(Auth::check())){
            return redirect('panel/dashboard');
        }
        // dd(Hash::make('password'));
        return view('auth.login');
    }

    public function loginAction(Request $request) {
        // dd($request->all());
        $remeber = !empty($request->remeber) ? true : false;
        if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password],$remeber)){
            return redirect('panel/dashboard');
        } else{
            return redirect()-> back()-> with('error','Please enter correct email and password.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
