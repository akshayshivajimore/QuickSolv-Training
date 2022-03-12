<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Crud;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;

class TableController extends Controller
{
    public function show()
    {
        return view('data.form')->with('formArr',User::all());
        
    }
    public function destroy(User $table,$id)
    {
        User::destroy(array('id',$id));
        return redirect('/list');
    }
    public function edit(User $table)
    {
        return view('/edit')->with('formArr',User::find($id));
    }

}