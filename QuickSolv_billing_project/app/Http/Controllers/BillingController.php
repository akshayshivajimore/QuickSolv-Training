<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Billingfile;
use App\Models\Company;
class BillingController extends Controller
{
    public function index()
    {
        $billingfile['data']  = Company::join('billing_files', 'companies.rec_id', '=', 'billing_files.company_id')->get();
       	
        return view ('billinglist',$billingfile);
    }
    public function add()
    {  // echo("hii");exit;
        $company = Company::all();
     return view('create_billing',compact('company'));

    }
    public function insert(Request $request)
    {    
        //print_r($request->all()); exit;
        $company = new Company();
        $company->company_name = $request->company_name;
       $company->save();
       $billingfile = new Billingfile();
       
       if($request->hasFile('filename'))
        {   
           
            $file=$request->file('filename');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('assets/uploads/billing',$filename);
            
            $billingfile->file_name =$filename;
            
        }
        $billingfile->company_id=$company->rec_id;

        $billingfile->invoice_date = $request->invoice_date;
        $billingfile->kind_attention = $request->kind_attn;
        $billingfile->save();
      return redirect('billing-list');
    }
       
    public function view(){
    
        return view('billing_list_info');
    }


    public function destroy(Request $request,$rec_id)
    {
        $billingfile=BillingFile::find($rec_id);
        $billingfile->delete();
      

        return redirect('billing-list');
    }

    
  
    
}