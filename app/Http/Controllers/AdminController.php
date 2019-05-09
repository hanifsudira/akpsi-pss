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
                return '<a href="/admin/edituser/'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="/admin/deleteuser/'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-alert"></i> Hapus</a>
                        ';
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
        $user->divisi = $request->divisi;
        $user->status =  true;
        $user->created_at = $now;
        $user->updated_at = $now;

        return $user->save() ? 'true' : 'false';
    }

    public function editUser($id){
        $user = DB::table('users')->where('id',$id)->get();
        return view('admin.useredit',['user'=>$user]);
    }

    public function deleteUser($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('admin/homepage');
    }

    public function editUserstore(Request $request){
        $now = new \DateTime();
        $sql = "update users set name='$request->name',email='$request->email',divisi='$request->divisi',role='$request->role' where id='$request->id'";
        $result = DB::select($sql);
        return $result ? 'true' : 'false';
    }
}
