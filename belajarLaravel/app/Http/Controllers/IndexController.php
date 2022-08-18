<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function halamanUtama(){
        return view('home');
    }

    public function table(){
        return view('layout.table');
    }
}
