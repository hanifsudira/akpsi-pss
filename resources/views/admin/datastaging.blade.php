@extends('template.app')
@section('title', 'Admin Data Staging')
@section('content')

    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>Data Staging</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">Data Staging</li>
            </ol>
        </section>

        <section class="content">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">LOAD DATA STAGING</button>
            </div>
         </section>
    </div>
@endsection