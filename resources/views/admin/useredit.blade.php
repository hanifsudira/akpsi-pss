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
                        <h3 class="box-title">Edit User</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <form id="edituser" class="form-group">
                                <input name="id" type="hidden" value="{{$user[0]->id}}">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$user[0]->name}}" placeholder="{{$user[0]->name}}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$user[0]->email}}" placeholder="{{$user[0]->email}}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{$user[0]->username}}" placeholder="{{$user[0]->username}}" disabled>
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Divisi</label>
                                        <input id="divisi" type="text" class="form-control{{ $errors->has('divisi') ? ' is-invalid' : '' }}" name="divisi" value="{{$user[0]->divisi}}" placeholder="{{$user[0]->divisi}}" required>
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
                    url     : '{{ route('admin.edituserstore') }}',
                    data    : $('#edituser').serialize(),
                    success: function(response) {
                        console.log(response);
                        console.log($('#edituser').serialize());
                        if(response == 'false'){
                            console.log('masok pak eko')
                            alert('Berhasil Edit User');
                            window.location = "/admin/homepage";
                        }
                        else {
                            alert('Berhasil Edit User');
                            window.location = "/admin/homepage";
                        }

                    },
                    error: function() {
                        console.log('ga masok pak eko')
                        alert('Gagal Edit User');
                        window.location = "/admin/homepage";
                    }
                });
            });
        });
    </script>
@endsection