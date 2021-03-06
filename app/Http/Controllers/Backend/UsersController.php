<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticable;
use App\Users;
use App\Http\Middleware\AdminTypeCheck;

class UsersController extends Controller
{
//    public function index()
//    {
//        return view('backend.dashboard');
//    }

    public function login(Request $request){
        if ($request->isMethod('get')){
            return view('backend.login');
        }
        $email=$request->email;
        $password=$request->password;
        $remember=isset($request->remember) ? true : false;
        if (Auth::attempt(['email'=> $email,'password'=> $password], $remember)){
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
