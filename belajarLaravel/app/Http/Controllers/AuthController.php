<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(){
        return view('signup.signup'); 
    }

    public function kirim(Request $request){
        $namadepan=$request['fname'];
        $namabelakang=$request['lname'];
        return view('signup.terdaftar', compact('namadepan','namabelakang'));
    }
}
