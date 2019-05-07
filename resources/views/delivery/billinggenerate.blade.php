@extends('template.app')
@section('title', 'Delivery Homepage')
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
@endsection
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
                        <div class="input-group date">
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
@section('js')
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
@endsection