<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers\Admin;

class UsersController extends Controller
{

    public function login(Request $request){
        if ($request->isMethod('get')){
            return view('backend.login');
        }
        $email=$request->email;
        $password=$request->password;
        $remember=isset($request->remember) ? true : false;
        if (Auth::attempt(['email'=>$email,'password'=>$password,$remember])){
            return route('admin');
        }
        return redirect()->back()->with('error','Invalid email and password');


    }

    public function logout()
    {
         Auth::logout();
        return redirect()->route('login');
    }
}
