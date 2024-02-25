<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function welcome(){
        return view('welcome');
    }

    function welcome2(){
        return view('welcome2');
    }
}
