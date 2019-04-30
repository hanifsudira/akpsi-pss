@extends('template.app')
@section('title', 'Admin Add User Page')
@section('content')

    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>Add User</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">Manage User</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Manage User</h3>
                </div>
                <div class="box-body">
                    <div class="row">

                        <!-- COLUMN 1 !-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Hanif Sudira" disabled="">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">User ID</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="80291" disabled="">
                            </div><div class="form-group">
                                <label for="exampleInputEmail1">Division</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Sales & Finance" disabled="" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">User Role</label>
                                <select class="form-control select2" style="width: 100%;">
                                  <option selected="selected">Delivery</option>
                                  <option>Settlement</option>
                                  <option>Partner</option>
                                </select>
                            </div>
                           <button type="submit" class="btn btn-primary">SAVE</button>
                            <button type="submit" class="btn btn-primary">CANCEL</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection