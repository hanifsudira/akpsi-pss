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
        $input = $request->all();
        $input['document_name'] = time().'.'.$request->document_name->getClientOriginalExtension();
        $request->document_name->move(public_path('document_name'), $input['document_name']);

        Upload_file::create($input);
        return response()->json(['success'=>'Berhasil']);
      }

      return response()->json(['error'=>$validator->errors()->all()]);
    }
}
