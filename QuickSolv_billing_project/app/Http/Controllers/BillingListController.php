<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BillingListController extends Controller
{
    public function billing_list_info()
    {
        return view('billing_list_info');
    }

    public function create_billing()
    {
        return view('create_billing');
    }
}
