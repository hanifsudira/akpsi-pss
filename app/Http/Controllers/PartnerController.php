<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function homepage(){
        return view('partner.homepage');
    }

    public function proposed(){
        return view('partner.proposed');
    }

    public function viewproposed(){
        return view('partner.viewproposed');
    }

    public function reconciliation(){
        return view('partner.reconciliation');
    }
}
