<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    

    public function login()
    {
        return view("login");
    }
    public function register()
  
    {
        return view("register");

       
    }
    public function store(Request $request)  
    { 
       $this->validate($request,[  
       'first_name'=>'required',  
       'last_name'=> 'required',  
       ]);  
       $users=new user(); 
       $users->first_name =$request->first_name;
       $users->last_name =$request->last_name;
       $users->email_id =$request->email_id;
       $users->username =$request->username;
       $users->password = Hash::make($request->password);
       $res=$users->save();
     
        return redirect('login')->with('success','you have register successfully');
   
   }
   public function logindata(Request $request){
       
    $users=new user(); 
    $users->username =$request->username;
  //  return view("admin.billing.index");
  return redirect('billing-list');

  }
}