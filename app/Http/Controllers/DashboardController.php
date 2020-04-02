<?php

namespace App\Http\Controllers;
use App\Company;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $company_id = auth()->user()->id;
        $company = Company::find($company_id); 
        $data = [
            "data" => $company,
            "jobs" => $company->jobs
        ];
        return view('sections.company')->with($data);
    }
}
