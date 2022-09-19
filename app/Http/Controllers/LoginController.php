<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function postlogin(LoginRequest $request){
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/');
        }
        return redirect('login')->with('danger','email dan password tidak cocok.');
    } 
 
    public function logout(Request $request){
        Auth::logout();
        return redirect('login');
    }

    public function registrasi(){
        return view('template.register');
    }

    public function simpanregistrasi(RegisterRequest $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'level' => 'owner',
            'address' => $request->address,
            'num_phone' => $request->num_phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('pengguna.login')->with('success','Regitrasi telah berhasil dibuat silahkan Login.');
    }
}
