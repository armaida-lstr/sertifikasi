<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sesiController extends Controller
{
    //
    function index(){
        return View('auth.login');
    }

    function login(Request $request){
        $request->validate([
// artinyharusterisoi
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required'=>'email wajib diisi',
            'password.required'=>'password wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('customer')->with('flash_message', 'hallo welcome to perpus!');
        }else{
            return redirect('')->withErrors('Username dan Password tidak sesua')->withInput();
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

}

