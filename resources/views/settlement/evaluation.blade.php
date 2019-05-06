@extends('template.app')
@section('title', 'Settlement Evaluation')
@section('content')

    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>Evaluation</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Settlement</a></li>
                <li class="active">Evaluation</li>
            </ol>
        </section>

        <section class="content">

            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Evaluation</h3>
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
                  <th>Amount</th>
                  <th>Product Name</th>
                  <th>Skema</th>
                  <th>Contract Start</th>
                  <th>Contract End</th>
                  <th>Contract Update Date</th>
                  <th>Paid/Unpaid</th>
                </tr>
                </thead>
                <tbody>
             
                <tr>
                  <td>1</td>
                  <td>Partner-1</td>
                  <td>KL-1</td>
                  <td href="">Invoice-Number-1</td>
                  <td>Rejected by Partner</td>
                  <td>Rp 20.000.000</td>
                  <td>Internet Network</td>
                  <td>Skema01</td>
                  <td>17-01-2018</td>
                  <td>29-04-2022</td>
                  <td>28-03-2019</td>
                  <td>UNPAID</td>
                </tr>

                <tr>
                    <td>2</td>
                  <td>Partner-2</td>
                  <td>KL-2</td>
                  <td href="">Invoice-Number-2</td>
                  <td>Accepted by Partner</td>
                  <td>Rp 1.872.000</td>
                  <td>Fiber Optic</td>
                  <td>Skema02</td>
                  <td>01-04-2019</td>
                  <td>22-02-2020</td>
                  <td>04-04-2019</td>
                  <td>UNPAID</td>
                </tr>

                <tr>
                    <td>3</td>
                  <td>Partner-3</td>
                  <td>KL-3</td>
                  <td href="">Invoice-Number-4</td>
                  <td>Accepted by Partner</td>
                  <td>Rp 15.020.011</td>
                  <td>Service</td>
                  <td>Skema03</td>
                  <td>18-03-2019</td>
                  <td>31-12-2021</td>
                  <td>01-04-2019</td>
                  <td>UNPAID</td>
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