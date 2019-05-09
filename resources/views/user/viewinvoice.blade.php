@extends('template.app')
@section('title', 'View Invoice')
@section('content')
    <div class="container">
        <section class="content-header">
            <h1>
                <small>Result</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">User</a></li>
                <li class="active">Result</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Invoice TC0172811</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Partner Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user[0]->partner_name}}" placeholder="{{$user[0]->partner_name}}" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kontrak Layanan</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user[0]->product_name}}" placeholder="{{$user[0]->product_name}}" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user[0]->remarks}}" placeholder="{{$user[0]->remarks}}" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contract Number</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user[0]->contract_number}}" placeholder="{{$user[0]->contract_number}}" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contract Start</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user[0]->contract_start}}" placeholder="{{$user[0]->contract_start}}" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contract End</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user[0]->remarks}}" placeholder="{{$user[0]->remarks}}" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user[0]->remarks}}" placeholder="{{$user[0]->remarks}}" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skema</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user[0]->remarks}}" placeholder="{{$user[0]->remarks}}" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Amount Number</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user[0]->remarks}}" placeholder="{{$user[0]->remarks}}" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Paid/Unpaid</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user[0]->payment_status}}" placeholder="{{$user[0]->payment_status}}" disabled="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Document Attachment</label>
                                <select class="form-control select2" style="width: 100%;" disabled>
                                    <option selected="selected">Document-Name-1.pdf</option>
                                </select>
                                <select class="form-control select2" style="width: 100%;" disabled>
                                    <option selected="selected">Document-Name-2.pdf</option>
                                </select>
                                <select class="form-control select2" style="width: 100%;" disabled>
                                    <option selected="selected">Document-Name-3.pdf</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info pull-right">Download All Document</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection