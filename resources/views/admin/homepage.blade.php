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
                    <h3 class="box-title">Users</h3>
                    {{--<div class="box-tools pull-right">--}}
                        {{--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>--}}
                        {{--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>--}}
                    {{--</div>--}}
                    <div class="box-body">
                        {{--<a class="btn btn-app" data-toggle="modal" data-target="#adduser"><i class="fa fa-users"></i> Add Users</a>--}}
                        <a class="btn btn-app" href="{{ route('admin.adduserview') }}"><i class="fa fa-users"></i> Add Users</a>
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
            {{--<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
                {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
                    {{--<div class="modal-content">--}}
                        {{--<div class="modal-header">--}}
                            {{--<h5 class="modal-title" id="exampleModalLongTitle">Add User Form</h5>--}}
                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                {{--<span aria-hidden="true">&times;</span>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                        {{--<div class="modal-body">--}}
                            {{--<form class="form-group" method="POST" action="{{ route('register') }}">--}}
                                {{--@csrf--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}
                                        {{--@if ($errors->has('name'))--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}
                                        {{--@if ($errors->has('email'))--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>--}}
                                        {{--@if ($errors->has('username'))--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                                {{--<strong>{{ $errors->first('username') }}</strong>--}}
                                            {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<select id="role" name="role" class="form-control">--}}
                                            {{--<option value="1">USER</option>--}}
                                            {{--<option value="2">DELIVERY</option>--}}
                                            {{--<option value="3">PARTNER</option>--}}
                                            {{--<option value="4">SETTLEMENT</option>--}}
                                            {{--<option value="5">ADMIN</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}
                                        {{--@if ($errors->has('password'))--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group row mb-0">--}}
                                    {{--<div class="col-md-6 offset-md-4">--}}
                                        {{--<button id="tag-form-submit" type="submit" class="btn btn-primary">--}}
                                            {{--{{ __('Register') }}--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                        {{--<div class="modal-footer">--}}
                            {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                            {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
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

        {{--$(document).ready(function() {--}}
            {{--$("#order").on('keyup', function (e) {--}}
                {{--if (e.keyCode == 13) {--}}
                    {{--e.preventDefault();--}}
                    {{--var order = $("#order").val();--}}
                    {{--$.ajax({--}}
                        {{--headers: {--}}
                            {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
                        {{--},--}}
                        {{--type    : 'POST',--}}
                        {{--@if($tipe == 'ebis')--}}
                        {{--url     : '{{ route('ebis.getorderdetail') }}',--}}
                        {{--@elseif($tipe == 'wib')--}}
                        {{--url     : '{{ route('wib.getorderdetail') }}',--}}
                        {{--@else--}}
                        {{--url     : '{{ route('wibuat.getorderdetail') }}',--}}
                        {{--@endif--}}
                        {{--data    : {order: order},--}}
                        {{--beforeSend: function() {--}}
                            {{--$.preloader.start({--}}
                                {{--modal: true,--}}
                                {{--src : 'sprites.png'--}}
                            {{--});--}}
                        {{--},--}}
                        {{--succes  : function () {--}}
                            {{--console.log('Sukses');--}}
                        {{--},--}}
                        {{--error   : function (xhr, status, error) {--}}
                            {{--console.log(xhr);--}}
                            {{--console.log(status);--}}
                            {{--console.log(error);--}}
                        {{--},--}}
                        {{--complete : function (result) {--}}
                            {{--$.preloader.stop();--}}
                            {{--$('#response').html(result.responseText);--}}
                        {{--}--}}
                    {{--});--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}

        {{--$('#tag-form-submit').on('click', function(e) {--}}
            {{--e.preventDefault();--}}
            {{--$.ajax({--}}
                {{--headers: {--}}
                    {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
                {{--},--}}
                {{--type: "POST",--}}
                {{--url: '{{ route('admin.adduser') }}',--}}
                {{--data: $('form.form-group').serialize(),--}}
                {{--success: function(response) {--}}
                    {{--console.log(response);--}}
                    {{--$('.modal').modal('hide');--}}
                    {{--if(response){--}}
                        {{--console.log('masok pak eko')--}}
                        {{--alert('Berhasil Tambah User');--}}
                    {{--}--}}
                    {{--else {--}}
                        {{--alert('Gagal Tambah User');--}}
                    {{--}--}}

                {{--},--}}
                {{--error: function() {--}}
                    {{--console.log('ga masok pak eko')--}}
                    {{--alert('Gagal Tambah User');--}}
                    {{--$('.modal').modal('hide');--}}
                {{--},--}}
                {{--complete : function (result) {--}}
                    {{--$('.modal').modal('hide');--}}
                {{--}--}}
            {{--});--}}
            {{--$('.modal').modal('hide');--}}
        // });
    </script>
@endsection
