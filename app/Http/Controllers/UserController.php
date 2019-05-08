<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
