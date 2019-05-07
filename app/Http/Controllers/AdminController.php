<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class AdminController extends Controller
{
    public function homepage(){
        return view('admin.homepage');
    }

    public function getUser(){
        $users = DB::table('users')->get();
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
    }

    public function datastaging(){
        return view('admin.datastaging');
    }
}
