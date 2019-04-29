@extends('template.app')
@section('title', 'User Homepage')
@section('content')
    <div class="container">
        <!-- Content Header (Page header) -->
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
                    <h3 class="box-title">Search Invoice</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Partner Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Partner Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Invoice Number</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Invoice Number">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Proposed Invoice by DA</option>
                                    <option>Alaska</option>
                                    <option disabled="disabled">California (disabled)</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info pull-right"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        {{-- <div class="box-header">
                          <h3 class="box-title">Hover Data Table</h3>
                        </div> --}}
                        <!-- /.box-header -->
                        <div class="box-body">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Partner Name</th>
                              <th>Kontrak Layanan</th>
                              <th>Invoice Number</th>
                              <th>Status</th>
                              <th>Contract Number</th>
                              <th>Product Name</th>
                              <th>Skema</th>
                              <th>Contact Start</th>
                              <th>Document Attachment</th>
                              <th>Paid/Unpaid</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>Trident</td>
                              <td>Internet
                                Explorer 4.0
                              </td>
                              <td>Win 95+</td>
                              <td> 4</td>
                              <td>X</td>
                              <td>Xaa</td>
                              <td>Xsc</td>
                              <td>Xsa</td>
                              <td>Xaa</td>
                              <td>Xeeq</td>
                              <td>Xasd</td>
                            </tr>
                            <tr>
                              <td>Trident</td>
                              <td>Internet
                                Explorer 5.0
                              </td>
                              <td>Win 95+</td>
                              <td>5</td>
                              <td>C</td>
                              <td>X</td>
                              <td>X</td>
                              <td>X</td>
                              <td>X</td>
                              <td>X</td>
                              <td>X</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Partner Name</th>
                                <th>Kontrak Layanan</th>
                                <th>Invoice Number</th>
                                <th>Status</th>
                                <th>Contract Number</th>
                                <th>Product Name</th>
                                    <th>Skema</th>
                                    <th>Contact Start</th>
                                    <th>Document Attachment</th>
                                    <th>Paid/Unpaid</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                      <!-- /.box -->
                    </div>
                    <!-- /.col -->
                  </div>
        </section>
    </div>
@endsection