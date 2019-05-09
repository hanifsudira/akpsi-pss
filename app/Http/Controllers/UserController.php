<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\AddUser;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function homepage(){
        return view('user.homepage');
    }

    public function viewinvoice(){
        return view('user.viewinvoice');
    }

    public function searchresult(){
        return view('user.searchresult');
    }

    public function getAdvanceFilterData(Request $request){
        $invoice = DB::table('proposed_invoice')->select([
            'proposed_invoice.id as id',
            'proposed_invoice.partner_name as partner_name',
            'proposed_invoice.product as product_name',
            'proposed_invoice.contract_number as invoice_number',
            'status.remarks as remarks',
            'proposed_invoice.contract_number as contract_number',
            'proposed_invoice.id_bg_sum as skema',
            'proposed_invoice.created_at as contract_start',
            'proposed_invoice.id_doc as document_attachment',
            'proposed_invoice.id_status as payment_status'
        ])->leftJoin('status','status.id','=','proposed_invoice.id_status');

        $datatables =  Datatables::of($invoice);

        if ($name = $request->get('partner_name')) {
            // additional users.name search
            $invoice->where('partner_name', 'like', "$name%");
        }

        if ($invoice_num = $request->get('invoice_number')) {
            $invoice->where('invoice_number', 'like', "$invoice_num%");
        }

        if ($status = $request->get('status')) {
            $invoice->where('remarks', 'like', $request->get('status'));
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
