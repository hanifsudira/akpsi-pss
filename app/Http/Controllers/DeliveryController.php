<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
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
