<?php

namespace App\Http\Controllers;

use Hash;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    // public function login(){
    //     // dd(Hash::make(00000000));
    //     if(!empty(Auth::check())){
    //         return redirect('admin/dashboard');
    //     }
    //     return view('auth.login');
    // }
    // public function AuthLogin(Request $request){
    //     // dd($request->all());
    //     $remember = !empty($request->remember) ? true : false;
    //     if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],true)){
    //         return redirect('admin/dashboard');
    //     }
    //     else{
    //         // return redirect()->back()->with('error','Veuillez saisir un email et mot de passe correct');
    //         return redirect('admin/dashboard');

    //     }
    // }


    // public function logout(){
    //     Auth::logout();
    //     redirect(url(''));
    // }
}
