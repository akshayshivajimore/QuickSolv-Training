<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsDetail;


class ProductController extends Controller
{
    function index()
    {
        $data= ProductsDetail::all();
 
        return view('product',['products_detail'=>$data]);
    }
    function detail($id)
    {
        $data= ProductsDetail::find(id);
        return view('detail',['product'=>$data]);
    }
}
