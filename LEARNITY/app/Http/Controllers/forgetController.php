<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgetController extends Controller
{
    //
    public function forgetPassword(){
        return view("forgetpassword.forgetpass");
    }
}
