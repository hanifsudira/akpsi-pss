@extends('template.app')
@section('title', 'Partner Proposed Invoice')
@section('content')

    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>View Proposed Invoice</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                <li><a href="#">Partner</a></li>
                <li class="active">View Proposed Invoice</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Invoice TC0172811 KL-1</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Invoice Number</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="TCO172811" disabled="">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Partner Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="BIZNET" disabled="">
                            </div><div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Proposed Invoice by DA" disabled="" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">NRC Amount</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="200,000" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">MRC Amount</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="300,000" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Termin Amount</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="500,000" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Total Amount</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="600,000" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Termin Sequence</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Maximum Usage</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Original Usage</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Actual Usage</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>


                            
                           <button type="submit" class="btn btn-primary">SUBMIT</button>
                            <button type="submit" class="btn btn-primary">CANCEL</button>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Line Item ID</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="BIZNET" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Fiber Optic" disabled="" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Kontrak Layanan</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="KL-1" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">NRC Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="TC1901-03001" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">MRC Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="16-01-2019" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Termin Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="20-01-2020" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">DP Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="20-12-2022" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Retensi Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Volume</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Buffer</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Usage Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>

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
                                    <button type="submit" class="btn btn-info pull-right">ADD MORE DOCUMENT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection