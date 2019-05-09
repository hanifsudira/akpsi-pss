<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;;
use App\Upload_file;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;

class DeliveryController extends Controller
{
    public function uploadFile()
    {
        return view('delivery.viewproposed');
    }

    public function StoreUploadFile(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'upload_by' => 'required',
        'upload_time' => 'required',
        'type_document' => 'required',
        'document_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      if ($validator->passes()) {
        $input = new Upload_file();

          $input->upload_by = $this->input('hidden_upload_by');
          $input->upload_time = $this->input('hidden_upload_time');
          $input->type_document = $this->input('hidden_type_document');
          $input->document_name = $this->input('hidden_document_name');

          return $input->save() ? 1 : 0;
        //  $input = $request->all();
     
       
        // $input['document_name'] = time().'.'.$request->hidden_upload_by->getClientOriginalExtension();
        // $request->hidden_upload_by->move(public_path('document_name'), $input['document_name']);
        
    //     Upload_file::create($input);
    //     return response()->json(['success'=>'Berhasil']);
      }
    //   return response()->json(['error'=>$validator->errors()->all()]);
    }
  
    public function homepage(){
        return view('delivery.homepage');
    }

    public function billinggenerate(){
        return view('delivery.billinggenerate');
    }

    public function viewbilling(){
        return view('delivery.viewbilling');
    }

    public function proposedinvoice(){
        return view('delivery.proposedinvoice');
    }

    public function viewproposed(){
        return view('delivery.viewproposed');
    }

    public function reconciliation(){
        return view('delivery.reconciliation');
    }

    public function showinvoice($data){
        $user = DB::table('billing_generate_sum')->select([
            'billing_generate_sum.id_bg_sum as no',
            'billing_generate_sum.partner_name as partner_name',
            'billing_generate_sum.id_bg_sum as kontrak_layanan',
            'billing_generate_sum.id_bg_sum as contract_number',
            DB::raw("DATE_FORMAT(billing_generate_sum.kl_start_date, '%d-%m-%Y')as contract_start"),
            DB::raw("DATE_FORMAT(billing_generate_sum.kl_end_date, '%d-%m-%Y')as contract_end"),
            'billing_generate_sum.product as product_name',
            'billing_generate_sum.customer_ref as skema',
            'billing_generate_sum.customer_ref as document_attachment'
        ])
        ->where('billing_generate_sum.id_bg_sum',$data)->get();

        return view('delivery.viewbilling',['user'=>$user]);
    }


    public function getAdvanceFilterData(Request $request){
        $invoice = DB::table('billing_generate_sum')->select([
            'billing_generate_sum.id_bg_sum as no',
            'billing_generate_sum.partner_name as partner_name',
            'billing_generate_sum.id_bg_sum as kontrak_layanan',
            'billing_generate_sum.id_bg_sum as contract_number',
            DB::raw("DATE_FORMAT(billing_generate_sum.kl_start_date, '%d-%m-%Y')as contract_start"),
            DB::raw("DATE_FORMAT(billing_generate_sum.kl_end_date, '%d-%m-%Y')as contract_end"),
            'billing_generate_sum.product as product_name',
            'billing_generate_sum.customer_ref as skema',
            'billing_generate_sum.customer_ref as document_attachment'
        ]);
        // ->leftJoin('status','status.id','=','proposed_invoice.id_status');

        $datatables =  Datatables::of($invoice);

        if ($name = $request->get('partner_name')) {
            // additional users.name search
            $invoice->where(DB::raw("DATE_FORMAT(billing_generate_sum.kl_start_date, '%d-%m-%Y')"), 'like', "$name%");
        }

        if ($invoice_num = $request->get('datepicker')) {
            $invoice->where('billing_generate_sum.kl_start_date', 'like', $request->get('datepicker'));
        }

        if ($status = $request->get('kontrak_layanan')) {
            $invoice->where('kontrak_layanan', 'like', "$status%");
        }

        if ($keyword = $request->get('search')['value']) {
            // override users.name global search
            $datatables->filterColumn('partner_name', 'where', 'like', "$keyword%");

            // override users.id global search - demo for concat
            $datatables->filterColumn('id', 'where', "like", "%$keyword%");
        }

        return $datatables->make(true);


    }
}
