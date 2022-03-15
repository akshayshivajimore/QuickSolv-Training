<?php

namespace App\Http\Controllers;

use App\Models\Fprm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data.form');
    }

    
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $validator = Validator::make($request->all(),
            [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'phone' => 'required',
                'age' => 'required',
                'password' => 'required',
                'confirm_password' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'pincode' => 'required',

            ]
        );
        echo '<pre>';
        print_r($validator->errors());exit;

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fprm  $fprm
     * @return \Illuminate\Http\Response
     */
    public function show(Fprm $fprm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fprm  $fprm
     * @return \Illuminate\Http\Response
     */
    public function edit(Fprm $fprm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fprm  $fprm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fprm $fprm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fprm  $fprm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fprm $fprm)
    {
        //
    }
}
