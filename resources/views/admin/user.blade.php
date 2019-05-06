@extends('template.app')
@section('title', 'Admin User Page')
@section('content')

    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>Search User</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">User</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Search User</h3>

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
                        <label>User name</label>
                        <input class="form-control" type="text" placeholder="80291">
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>User ID</label>
                        <input class="form-control" type="text">
                      </div>
                      <!-- /.form-group -->

                    
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Division</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Information Technology (IT)</option>
                          <option>dummy 2</option>
                          <option>dummy 3</option>
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
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>User Name</th>
                  <th>User ID</th>
                  <th>User Role</th>
                  <th>Division</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>1</td>
                  <td>Hanif Sudira</td>
                  <td>80291</td>
                  <td>None</td>
                  <td>Sales & Finance</td>
                  <td>Add Icon</td>
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