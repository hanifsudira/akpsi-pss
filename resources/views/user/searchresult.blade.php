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

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
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
                        <label>Invoice Number</label>
                        <input class="form-control" type="text">
                      </div>
                      <!-- /.form-group -->
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
                  <th>Kontrak Layanan</th>
                  <th>Invoice Number</th>
                  <th>Status</th>
                  <th>Contract Number</th>
                  <th>Product Name</th>
                  <th>Skema</th>
                  <th>Contract Start</th>
                  <th>Contract End</th>
                  <th>Document Attachment</th>
                  <th>Paid/Unpaid</th>
                </tr>
                </thead>
                <tbody>
             
                <tr>
                   <td>1</td>
                  <td>Biznet</td>
                  <td>KL-1</td>
                  <td>Invoice-Number1</td>
                  <td>Status1</td>
                  <td>Contract-Number1</td>
                  <td>Product-Name1</td>
                  <td>Skema1</td>
                  <td>ContractStart1</td>
                  <td>ContractEnd1</td>
                  <td>DocumentAttachment1</td>
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
              <!-- /.box -->
        </section>
    </div>
@endsection