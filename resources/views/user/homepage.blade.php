@extends('template.app')
@section('title', 'User Homepage')
@section('content')
    <div class="container">
        <form method="POST" id="search-form" role="form">
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
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i>
                        </button>
                    </div>
                </div>
                {{-- class="form-inline" --}}
               
                    <div class="box-body">
                        <div class="row">
                         
                            <div class="col-md-6">
                              
                                <div class="form-group">
                                    <label>Partner Name</label>
                                    <input class="form-control" type="text" name="partner_name" id="partner_name"
                                           placeholder="search partner name">
                                </div>
                                <div class="form-group">
                                    <label>Invoice Number</label>
                                    <input class="form-control" type="text" name="invoice_number" id="invoice_number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" style="width: 100%;" name="status" id="status">
                                        <option selected="selected"></option>
                                        <option>Accepted by Delivery</option>
                                        <option>Accepted by Reviewer</option>
                                        <option>Accepted by Evaluator</option>
                                        <option>Accepted by Partner</option>
                                        <option>Rejected by Delivery</option>
                                        <option>Rejected by Reviewer</option>
                                        <option>Rejected by Evaluator</option>
                                        <option>Rejected by Partner</option>
                                    </select>
                                </div>
                              </form>
                            </div>

                        </div>
                    </div>
             
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </form>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                    {{-- <div class="box-header">
                      <h3 class="box-title">Hover Data Table</h3>
                    </div> --}}
                    <!-- /.box-header -->
                        <div class="box-body">
                            <table id="datatable" class="table table-bordered table-hover">
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        // $(document).ready(function() {
        var oTable = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: 'usergetuser',
                data: function (d) {
                    d.partner_name = $('input[name=partner_name]').val();
                    d.invoice_number = $('input[name=invoice_number]').val();
                    d.status = $('select[name=status]').val();
                }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'partner_name', name: 'partner_name'},
                {data: 'product_name', name: 'product_name'},
                {data: 'invoice_number', name: 'invoice_number',
                render:function(data, type, row){
                return "<a href='/user/viewinvoice/"+ data +"'>" + data + "</a>"
                    }
                   },
                {data: 'remarks', name: 'remarks'},
                {data: 'contract_number', name: 'contract_number'},
                {data: 'skema', name: 'skema'},
                {data: 'contract_start', name: 'contract_start'},
                {data: 'document_attachment', name: 'document_attachment'},
                {data: 'payment_status', name: 'payment_status'},
                {data: 'payment_status', name: 'payment_status'}
            ]
        });
        // });
        $('#search-form').on('submit', function (e) {
            oTable.draw();
            e.preventDefault();
        });
    </script>
@endsection