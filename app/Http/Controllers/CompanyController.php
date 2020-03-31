<?php

namespace App\Http\Controllers;
use App\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.company");
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
            'email' => 'bail | required | email | unique:companies,email',
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

        $row = App\Company::where('email', $request->email)->get();
        $id = $row->company_id;
        return redirect('/company/{$id}');

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
        $row = \App\Institute::find($id);

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
