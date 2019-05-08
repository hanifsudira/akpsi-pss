<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;;
use App\Upload_file;

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
        // $input = new Upload_file();

        //   $input->upload_by = $this->input('hidden_upload_by');
        //   $input->upload_time = $this->input('hidden_upload_time');
        //   $input->type_document = $this->input('hidden_type_document');
        //   $input->document_name = $this->input('hidden_document_name');

        //   return $input->save() ? 1 : 0;
         $input = $request->all();
         dd($input);
       
        // $input['document_name'] = time().'.'.$request->hidden_upload_by->getClientOriginalExtension();
        // $request->hidden_upload_by->move(public_path('document_name'), $input['document_name']);
        
        Upload_file::create($input);
        return response()->json(['success'=>'Berhasil']);
      }
      return response()->json(['error'=>$validator->errors()->all()]);
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
}
