<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function __construct(){

        $this->middleware("Login");

    }

    public function showDashboard(Request $request){
        //
        //$myVar = $request->instance()->query('myVar');
            return view('dashboard');
    }
}
