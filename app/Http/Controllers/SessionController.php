<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class SessionController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'email wajib diisi',
            'password.required'=>'password wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('dashboard');
        }else{
            return redirect('/')->withErrors('Username dan Password yang dimasukkan salah');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }

    function register(){
        return view('register');
    }

    function create(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ],[
            'name.required'=>'Nama wajib diisi',
            'email.required'=>'email wajib diisi',
            'email.email'=>'silahkan masukkan email yang valid',
            'email.unique'=>'Email sudah pernah digunakan',
            'password.required'=>'password wajib diisi',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('/');
        }else{
            return redirect('/daftar');
        }
    }
}
