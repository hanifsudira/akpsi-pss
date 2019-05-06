@extends('template.app')
@section('title', 'Delivery Homepage')
@section('content')

    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>View Billing</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                <li><a href="#">Delivery</a></li>
                <li class="active">View Billing</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Kontrak Layanan KL-1</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Partner Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Partner-1" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contract Number</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Rejected by Partner" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Internet Network" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skema</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="TC1901-03001" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contract Start</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="20-01-2020" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contract End</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="29-04-2022" disabled="">
                            </div>
                           <button type="submit" class="btn btn-primary">CREATE PROPOSED INVOICE</button>
                            <button type="submit" class="btn btn-primary">CANCEL</button>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
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
                                    <button type="submit" class="btn btn-info pull-right">DOWNLOAD ALL DOCUMENT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection