@extends('template.app')
@section('title', 'Settlement Proposed Invoice')
@section('content')

    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>Proposed Invoice</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Settlement</a></li>
                <li class="active">Proposed Invoice</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Proposed Invoice</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-6">
                      
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Invoice Number</label>
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
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Accepted by Delivery</option>
                          <option>Accepted by Reviewer</option>
                          <option>Accepted by Evaluator</option>
                          <option>Accepted by Partner</option>
                          <option>Rejected by Delivery</option>
                          <option>Rejected by Reviewer</option>
                          <option>Rejected by Evaluator</option>
                          <option>Rejected by Partner</option>
                        </select>

                      </div>
                      <!-- /.form-group -->
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

            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Search Invoice Result</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Partner Name</th>
                  <th>Invoice Number</th>
                  <th>Status</th>
                  <th>Kontrak Layanan</th>
                  <th>Contract Number</th>
                  <th>Product Name</th>
                  <th>Skema</th>
                  <th>Contract Start</th>
                  <th>Contract End</th>
                  <th>Document Attachment</th>
                  <th>Action</th>
                  <th>Paid/Unpaid</th>
                </tr>
                </thead>
                <tbody>
             
                <tr>
                   <td>1</td>
                  <td>Biznet</td>
                  <td href="">TC0172811</td>
                  <td>Proposed Invoice by DA</td>
                  <td>KL-1</td>
                  <td>TC1901-03001</td>
                  <td>Internet Network</td>
                  <td>Skema1</td>
                  <td>16-01-2019</td>
                  <td>20-01-2020</td>
                  <td>DocumentAttachment1</td>
                  <td>Edit icon</td>
                  <td>PAID</td>
                </tr>
                </tbody>
                <tfoot>
                


                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </div>

         </section>
    </div>
@endsection