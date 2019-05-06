@extends('template.app')
@section('title', 'Settlement Homepage')
@section('content')

    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>Activities</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Settlement</a></li>
                <li class="active">Activities</li>
            </ol>
        </section>

        <section class="content">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Activities</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Partner Name</th>
                  <th>Kontrak Layanan</th>
                  <th>Invoice Number</th>
                  <th>Status</th>
                  <th>Status Update Date</th>
                  <th>Status Update By</th>
                </tr>
                </thead>
                <tbody>
             
                <tr>
                   <td>1</td>
                  <td>Biznet</td>
                  <td>KL-1</td>
                  <td>Invoice-Number1</td>
                  <td>Status1</td>
                  <td>StatusUpdateDate1</td>
                  <td>StatusUpdateBy1</td>
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