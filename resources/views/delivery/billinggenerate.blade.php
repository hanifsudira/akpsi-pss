@extends('template.app')
@section('title', 'Delivery Homepage')
@section('content')

    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>Billing Generate</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Delivery</a></li>
                <li class="active">Billing Generate</li>
            </ol>
        </section>

        <section class="content">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Search Billing Generate</h3>
            </div>
            <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Partner Name</label>
                        <input class="form-control" type="text">
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Contract Date</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="contractdate">
                        </div>
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Kontrak Layanan</label>
                        <input class="form-control" type="text">
                      </div>

                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Partner Name</th>
                  <th>Kontrak Layanan</th>
                  <th>Contract Number</th>
                  <th>Contract Start</th>
                  <th>Contract End</th>
                  <th>Product Name</th>
                  <th>Skema</th>
                  <th>Document Attachment</th>
                </tr>
                </thead>
                <tbody>
             
                <tr>
                  <td>Partner01</td>
                  <td>KL-1</td>
                  <td>TK 02011</td>
                  <td>20-01-2020</td>
                  <td>29-04-2022</td>
                  <td>Internet Network</td>
                  <td>Skema-1</td>
                  <td>file1.doc</td>
                </tr>
                <tr>
                  <td>Partner02</td>
                  <td>KL-2</td>
                  <td>YA 02911</td>
                  <td>27-08-2019</td>
                  <td>29-12-2020</td>
                  <td>Fiber Optic</td>
                  <td>Skema-2</td>
                  <td>file2.doc</td>
                </tr>
                </tbody>
                <tfoot>
                


                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


        </section>
    </div>
@endsection