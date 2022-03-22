<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {   
        return view('login');
    }

    public function auth(Request $request)
    {   
        $username=$request->post('username');
        $password=$request->post('password');

        $result=User::where(['username'=>$username,'password'=>$password])->get();
        if(isset($result['0']->id))
        {

        }else{
            $request->session()->flash('error','Please enter valid details');
            return redirect('login');
        }
    }
}