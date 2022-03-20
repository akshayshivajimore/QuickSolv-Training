<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductControllerr extends Controller
{
    public function index()
    {
            $result['data']=Product::all();
            return view('admin.product',$result);
    }
    public function manage_product(Request $request,$id='')
    {
        if($id>0){
            $arr=Product::where(['id'=>$id])->get();

            $result['name']=$arr['0']->name;
            $result['category_id']=$arr['0']->category_id;
            
            $result['price']=$arr['0']->price;
            $result['slug']=$arr['0']->slug;
            $result['description']=$arr['0']->description;
            $result['status']=$arr['0']->status;
            $result['gallery']=$arr['0']->gallery;
            $result['id']=$arr['0']->id;
        }else
        {
            $result['name']='';
            $result['category_id']='';
            
            $result['price']='';
            $result['slug']='';
            $result['description']='';
            $result['status']='';
            $result['gallery']='';
            $result['id']=0;
        }
        return view('admin.manage_product',$result);
    }
    public function manage_product_process(Request $request)
    {
        //return $request->post();
        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:products,slug,'.$request->post('id'),
        ]);

        if($request->post('id')>0){
            $model=Product::find($request->post('id'));
            $msg="Product updated";
        }else{
        $model=new Category();
        $msg="Product inserted";
        }

        $model->category_id=$request->post('category_id');
        $model->name=$request->post('name');
        $model->price=$request->post('price');
        $model->slug=$request->post('slug');
        $model->description=$request->post('description');
        $model->price=$request->post('price');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/product');
    }
    public function delete(Request $request,$id)
    {
       $model=Product::find($id);
       $model->delete();
       $request->session()->flash('message','Product deleted');
        return redirect('admin/product');
    }

    public function status(Request $request,$status,$id)
    {
       $model=Product::find($id);
       $model->status=$status;
       $model->save();
       $request->session()->flash('message','Product status Updated');
        return redirect('admin/product');
    }
}
