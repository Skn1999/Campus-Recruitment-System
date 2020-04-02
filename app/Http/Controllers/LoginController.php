<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Job;

class LoginController extends Controller
{
    //
    public function __construct(){

        $this->middleware("Login");

    }

    public function showDashboard(Request $request){
        //
            Session::put('loggedin', 'true');
            $type = $request->get("type");
            $row = $request->get("data");
            //echo "<pre>", $row[0]['name'] , "</pre>";
            if( $type == "company"){
                //return "This is inside the Login controller";
                $jobs = Job::orderBy("created_at", 'desc')->where("company_id", $row[0]->company_id)->get();
                $data = [
                    "jobs" => $jobs,
                    "data" => $row[0]
                ];
                Session::put('type', 'company');
                return view("sections.company")->with("data", $data);
            }
            else{
                $jobs = Job::orderBy('created_at', 'desc')->get();
                $data = [
                    'jobs' => $jobs,
                    "data" => $row[0]
                ];
                Session::put('type', 'institute');
                return view("sections.institute")->with("data", $data);
            }
        
    }
}
