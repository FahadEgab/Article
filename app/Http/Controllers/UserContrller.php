<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContrller extends Controller
{
    public function __construct(){

    }

    public function signIn(){
        return view('signIn');
    }
    public function signUp(){
        return view('signUp');
    }


}
