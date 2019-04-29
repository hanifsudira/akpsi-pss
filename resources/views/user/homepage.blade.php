@extends('template.app')
@section('title', 'User Homepage')
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
        <h3 class="box-title">Search Invoice</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Partner Name</label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group">
              <label>Invoice Number</label>
              <input class="form-control" type="text">
            </div>
          </div>
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
          </div>
        </div>
      </div>
      <div class="box-footer">
          <button type="submit" class="btn btn-primary">Search</button>
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
                  </div>
                </div>
              </div>
  </section>
</div>
@endsection