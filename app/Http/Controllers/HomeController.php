<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function show(){
        return view('home.index');
    }

    public function show2(){
        
        return view('home2.index2');
    }
}
