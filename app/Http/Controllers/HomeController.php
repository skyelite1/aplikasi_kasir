<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        return view('index');
        // return view('home',$data);

    }

    public function admin(){
        return view('admin.home');
    }

    public function kasir(){
        return view('kasir.home');
    }

    public function login(Request $request){
        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ],[
            'email.required'    => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)) {
            if(Auth::user()->role == 'admin'){
                return redirect('admin');
            }elseif (Auth::user()->role == 'kasir'){
                return redirect('kasir');
            }
        }else{
            return redirect('')->withErrors('email atau password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    public function logout(){
       Auth::logout();
       return redirect('/');
    }
}
