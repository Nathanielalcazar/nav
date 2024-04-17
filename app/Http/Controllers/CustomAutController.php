<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAutController extends Controller
{
    public function login(){
        return view('login');
    }

    public function registration() {  
        return view('signup');
    }
}
