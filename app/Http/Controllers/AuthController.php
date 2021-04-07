<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AuthController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function login(Request $request){
    	if (Auth::attempt($request->only('email','password'))) {
			$akun = \App\User::where('email', $request->email)->first();
			if($akun->role == 'admin'){
				Auth::guard('admin')->LoginUsingId($akun->id);
				return redirect ('admin_dashboard');
			}else if($akun->role == 'pegawai'){
				Auth::guard('pegawai')->LoginUsingId($akun->id);
				return redirect ('dashboard');
			}
    	}
    	return redirect('/login');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/login');
    }
}
