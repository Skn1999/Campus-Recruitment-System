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
            $type = $request->get("type");
            $row = $request->get("data");
            //echo "<pre>", $row[0]['name'] , "</pre>";
            if( $type == "company"){
                return view("sections.company")->with("data", $row[0]);
            }
            else{
                return view("sections.institute")->with("data", $row[0]);
            }
        
    }
}
