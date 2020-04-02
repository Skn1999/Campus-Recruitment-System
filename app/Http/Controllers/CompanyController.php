<?php

namespace App\Http\Controllers;
use App\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function __construct(){
        $this->middleware('auth')->only(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //return "This is index function after middleware auth";
        return view("sections.company");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("signup-company");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'year' => 'digits:4 | after_or_equal:1990 | before_or_equal:2020',
            'domain'=> 'nullable | regex:/^[a-zA-Z\.-_]+$/i',
            'email' => 'bail | required | email',
            'password' => 'required | min:6 | max:16',
            'cpassword' => 'required | min:6 | max:16 | same:password',

        ]);



        $company = new Company;

        $company->name = $request->name;
        $company->year = $request->year;
        $company->domain = $request->domain;
        $company->email = $request->email;
        $company->password = $request->password;

        $company->save();

        //$row = Company::where('email', $request->email)->get();
        return redirect('/company')->with("success", "Succesfully registered. You may login now.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $row = App\Company::find($id);

        return $row->name;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $company = Company::find($id);
        return view("editCompany",[
            "data" => $company
        ])->with("success", "You may change your information here.");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'year' => 'digits:4 | after_or_equal:1990 | before_or_equal:2020',
            'domain'=> 'nullable | regex:/^[a-zA-Z\.-_]+$/i',
            'email' => 'bail | required | email | unique:companies,email',
        ]);

        $company = Company::find($id);

        $company->name = $request->name;
        $company->year = $request->year;
        $company->domain = $request->domain;
        $company->email = $request->email;

        $company->save();

        return redirect('sections.company')->with("success", "Profile Information Updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
