<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\Company;

class JobController extends Controller
{
    //
    public function store(Request $request, $company_id){
        $request->validate([
            "jobPosition" => "required | regex:/^[a-zA-Z ]+$/i",
            "skills" => "required",
            "eligibility" => "nullable",
            "vacancy" => "required | numeric",
            "location" => "nullable",
            // "file" => "nullable"
        ]);

        $job = new Job;

        $job->job_position = $request->jobPosition;
        $job->eligibility = empty($request->eligibility) ? null : $request->eligibility;
        $job->no_of_vacancies = $request->vacancy;
        $job->location = empty($request->location) ? null : $request->location;
        $job->company_id = $company_id;

        $job->save();

        $row = Company::where("company_id", $company_id)->get();
        $jobs = Job::orderBy("created_at", 'desc')->where("company_id", $company_id)->get();
        $data = [
                    "jobs" => $jobs,
                    "data" => $row[0]
        ];

        return view("sections.company")->with('data', $data);
    }
    
    public function showJob($job_id){
        $job = Job::find($job_id);
        $company = Company::where('company_id', $job->company_id)->get();

        $data = [
            "job" => $job,
            'company' => $company[0]
        ];

        return view("sections.jobInfo")->with('data', $data);
    }
}
