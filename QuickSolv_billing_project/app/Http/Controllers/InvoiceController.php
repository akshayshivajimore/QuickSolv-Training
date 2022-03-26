<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Billingfile;
use App\Models\Company;
use App\Models\Invoice;

class InvoiceController extends Controller
{

    public function index()
    {
       $billinginfo['data']=Invoice::all();
       return view('billing_list_info',$billinginfo);
    }
    public function create()
    {
        $billingfile = BillingFile::all();
        return view ('create_invoice',compact('billingfile'));
    }

    public function insert(Request $request)
    {

        $billingfile = new BillingFile();
        $billingfile->file_name = $request->file_name;
       $billingfile->save();
       $billinginfo = new Invoice();
        //$model=new Invoice();
        //$model->company_name=$request->post('company_name');
        $billinginfo->invoice_no=$billingfile->rec_id;
        //$model->rec_id=$request->post('rec_id');
        $billinginfo->vertical=$request->vertical;
        $billinginfo->claim_number=$requestclaim_number;
        $billinginfo->state_code=$requeststate_code;
        $billinginfo->state_name=$requeststate_name;
        $billinginfo->gst_no=$request->gst_no;
        $billinginfo->billing_name=$request->billing_name;
        $billinginfo->billing_address=$request->billing_address;
        $billinginfo->save();
        //$request->session()->flash('message','Created');

        return redirect('billing-list-info');
    }
}