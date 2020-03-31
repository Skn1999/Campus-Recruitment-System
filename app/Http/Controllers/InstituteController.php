<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("signup-institute");
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
            'affl'=> 'nullable',
            'email' => 'bail | required | email | unique:institutes,email',
            'password' => 'required | min:6 | max:16',
            'cpassword' => 'required | min:6 | max:16 | same:password',

        ]);

        $college = new Institute;
        
        $college->name = $request->name;
        $college->year = $request->year;
        $college->affiliation_no = $request->affl;
        $college->email = $request->email;
        $college->password = $request->password;

        $college->save();

        $row = App\Institute::where('email', $request->email)->get();
        $id = $row->college_id;
        return redirect('/institute/{$id}');

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
