@extends('template.app')
@section('title', 'Admin Homepage')
@section('content')

    <div class="container">
        <section class="content-header">
            <h1>
                <small>Search User</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">Homepage</li>
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
                    <div class="box-body">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>USERNAME</th>
                                <th>ROLE</th>
                                <th>STATUS</th>
                                <th>CREATED AT</th>
                                <th>UPDATED AT</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.getuser') }}',
                columns: [
                    { data: 'name',name: 'name'},
                    { data: 'email',name: 'email'},
                    { data: 'username',name: 'username'},
                    { data: 'role',name: 'role'},
                    { data: 'status',name: 'status'},
                    { data: 'created_at',name: 'created_at'},
                    { data: 'updated_at',name: 'updated_at'},
                    { data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endsection
