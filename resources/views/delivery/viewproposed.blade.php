@extends('template.app')
@section('title', 'Delivery Proposed Invoice')
@section('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
    body {
        color: #404E67;
        background: #F5F7FA;
		font-family: 'Open Sans', sans-serif;
	}
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
		height: 30px;
		font-weight: bold;
		font-size: 12px;
		text-shadow: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 13px;
    }
	.table-title .add-new i {
		margin-right: 4px;
	}
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
		cursor: pointer;
        display: inline-block;
        margin: 0 5px;
		min-width: 24px;
    }    
	table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table td a.add i {
        font-size: 24px;
    	margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
	table.table .form-control.error {
		border-color: #f50000;
	}
	table.table td .add {
		display: none;
	}
</style>
@endsection
@section('content')

    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>View Proposed Invoice</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                <li><a href="#">Delivery</a></li>
                <li class="active">View Proposed Invoice</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Invoice TC0172811 KL-1</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Invoice Number</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="TCO172811" disabled="">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Partner Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="BIZNET" disabled="">
                            </div><div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Proposed Invoice by DA" disabled="" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">NRC Amount</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="200,000" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">MRC Amount</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="300,000" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Termin Amount</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="500,000" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Total Amount</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="600,000" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Termin Sequence</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Maximum Usage</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Original Usage</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Actual Usage</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>


                            
                           <button type="submit" class="btn btn-primary">SUBMIT</button>
                            <button type="submit" class="btn btn-primary">CANCEL</button>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Line Item ID</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="BIZNET" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Fiber Optic" disabled="" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Kontrak Layanan</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="KL-1" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">NRC Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="TC1901-03001" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">MRC Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="16-01-2019" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Termin Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="20-01-2020" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">DP Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="20-12-2022" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Retensi Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Volume</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Buffer</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Usage Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                    <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-8"><b>Document Attachment</b></div>
                                                </div>
                                            </div>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Upload By</th>
                                                        <th>Upload Time</th>
                                                        <th>Type Document</th>
                                                        <th>Document Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Delivery</td>
                                                        <td>26-03-2019</td>
                                                        <td>PDF</td>
                                                        <td>(171) 555-2222</td>
                                                        <td>
                                                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                        </td>
                                                    </tr>    
                                                </tbody>
                                            </table>
                                        </div>
                            </div>
                            <div class="form-group">
                                 <div class="col-sm-4">
                                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                                    </div>
                                {{-- <div class="box-footer">
                                    <button type="submit" class="btn btn-info pull-right">ADD MORE DOCUMENT</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="No" id="No"></td>' +
            '<td><input type="text" class="form-control" name="Upload By" id="Upload By"></td>' +
            '<td><input type="text" class="form-control" name="Upload Time" id="Upload Time"></td>' +
            '<td><input type="text" class="form-control" name="Type Document" id="Type Document"></td>' +
            '<td><input type="text" class="form-control" name="Document Name" id="Document Name"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>
@endsection