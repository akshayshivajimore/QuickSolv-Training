<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function signup()
    {
        $data= User::all();

       return view('signup',['signup'=>$data]);

    }
    function add(Request $req)
    {
        $member= new User;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->password=$req->password;
        $member->confirm_password=$req->confirm_password;
        $member->save();    
        return redirect('/login');
    }
}