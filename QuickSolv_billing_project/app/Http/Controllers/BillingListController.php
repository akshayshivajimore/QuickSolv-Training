<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BillingFile;
use App\Models\Company;
use App\Models\Invoice;

class BillingListController extends Controller
{   
    public function index() 
    {
        $result['data']=Company::join('billing_files', 'companies.rec_id', '=', 'billing_files.company_id')->get();
        return view('billinglist',$result);
    }
    public function billing_list_info()
    {
        return view('billing_list_info');
    }

    public function create_billing()
    {
        return view('create_billing');
    }
    public function add(Request $request)
    {
        $model=new BillingFile();
        //$model->company_name=$request->post('company_name');
        $model->rec_id=$request->post('rec_id');
        $model->invoice_date=$request->post('invoice_date');
        $model->kind_attention=$request->post('kind_attention');
        $model->file_name=$request->post('file_name');
        $model->save();
        $request->session()->flash('message','Created');

        return redirect('login/billing_list');
    }

    public function delete(Request $request,$rec_id)
    {
        $model=BillingFile::find($rec_id);
        $model->delete();
        $request->session()->flash('message','Deleted');

        return redirect('login/billing_list');
    }
}
