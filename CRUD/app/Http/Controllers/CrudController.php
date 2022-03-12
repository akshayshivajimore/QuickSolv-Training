<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\UserDetails;

class CrudController extends Controller
{
    
    public function index()
    {
        $countries = \App\Models\Country::pluck('country_name','id');
        
        return view('data.file')->with('countries',$countries);
    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        try{
      $user = new \App\Models\Users();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->phone = $request->phone;
      $user->password = $request->password;
      $user->save();

      $userDetail = new \App\Models\UserDetails();
      $userDetail->user_id = $user->id;
      $userDetail->age = $request->age;
      $userDetail->address = $request->address;
      $userDetail->city = $request->city;
      $userDetail->state = $request->state;
      $userDetail->country = $request->country;
      $userDetail->pincode = $request->pincode;
      $userDetail->save();
      DB::commit();
      return redirect('/list');

        } catch (Exception $ex)
    {
        DB::rollBack();
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(Crud $crud)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(Crud $crud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crud $crud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crud $crud)
    {
        //
    }
}
