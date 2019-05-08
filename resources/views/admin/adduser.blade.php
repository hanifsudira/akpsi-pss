@extends('template.app')
@section('title', 'Admin Add User Page')
@section('content')

    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>Add User</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">Add User</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Add User</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form id="adduser" class="form-group">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Divisi</label>
                                    <input id="divisi" type="text" class="form-control{{ $errors->has('divisi') ? ' is-invalid' : '' }}" name="divisi" value="{{ old('divisi') }}" required>
                                    @if ($errors->has('divisi'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('divisi') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Role</label>
                                    <select id="role" name="role" class="form-control">
                                        <option value="1">USER</option>
                                        <option value="2">DELIVERY</option>
                                        <option value="3">PARTNER</option>
                                        <option value="4">SETTLEMENT</option>
                                        <option value="5">ADMIN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <button id="tag-form-submit" type="submit" class="btn btn-primary">Save</button>
                                <a href="{{route('admin.homepage')}}" class="btn btn-primary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#tag-form-submit").on('click', function(e) {
                e.preventDefault();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type    : 'POST',
                    url     : '{{ route('admin.adduser') }}',
                    data    : $('#adduser').serialize(),
                    success: function(response) {
                        console.log(response);
                        if(response == 'true'){
                            console.log('masok pak eko')
                            alert('Berhasil Tambah User');
                            window.location = "/admin/homepage";
                        }
                        else {
                            alert('Gagal Tambah User');
                            window.location = "/admin/homepage";
                        }

                    },
                    error: function() {
                        console.log('ga masok pak eko')
                        alert('Gagal Tambah User');
                        window.location = "/admin/homepage";
                    }
                });
            });
        });
    </script>
@endsection