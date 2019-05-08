<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettlementController extends Controller
{
    public function homepage(){
        return view('settlement.homepage');
    }

    public function proposed(){
        return view('settlement.proposed');
    }

    public function viewproposed(){
        return view('settlement.viewproposed');
    }

    public function evaluation(){
        return view('settlement.evaluation');
    }
}
