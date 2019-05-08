<?php

namespace App\Http\Controllers;

use App\AddUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;


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

    public function dataStaging(){
        return view('admin.datastaging');
    }

    public function adduserview(){
        return view('admin.adduser');
    }

    public function addUser(Request $request){
        $now = new \DateTime();

        $user = new AddUser();

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->status =  true;
        $user->created_at = $now;
        $user->updated_at = $now;

        return $user->save() ? 1 : 0;
    }

}
