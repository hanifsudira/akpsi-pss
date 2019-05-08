@extends('template.app')
@section('title', 'Delivery Proposed Invoice')
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{{-- <link rel="stylesheet" href="bootstrap.min.css" /> --}}
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                                <input type="email" class="form-control" name= "partner_name" id="partner_name" placeholder="BIZNET" disabled="">
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
                                <label for="exampleInputEmail1">Total Amount</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="600,000" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Line Item ID</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="BIZNET" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Proposed Invoice by DA" disabled="">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>


                        
                            <div class="form-group">
                                    <button class="btn btn-success upload-image" type="submit">SUBMIT</button>
                            </div>                              
                            {{-- <button type="submit" class="btn btn-primary">SUBMIT</button> --}}
                            <button type="submit" class="btn btn-primary">CANCEL</button>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kontrak Layanan</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="KL-1" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">NRC Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Fiber Optic" disabled="" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">MRC Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="KL-1" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">DP Penalty</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="TC1901-03001" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Volume</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="16-01-2019" disabled="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Buffer</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="20-01-2020" disabled="">
                            </div>

                            <form action="{{ route('uploadFile') }}" enctype="multipart/form-data" method="POST"> 
                               
                            <div class="form-group">
                                    <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-8"><b>Document Attachment</b></div>
                                                </div>
                                            </div>
                                            
                                            <form method="post" id="user_form">
                                                    <div class="table-responsive">
                                                     <table class="table table-striped table-bordered" id="user_data">
                                                      <tr>
                                                       <th>Upload By</th>
                                                       <th>Upload Time</th>
                                                       <th>Type Document</th>
                                                       <th>Document Name</th>
                                                       {{-- <th>Details</th> --}}
                                                       <th>Remove</th>
                                                      </tr>
                                                     </table>
                                                    </div>

                                                   </form>
                                                
                                                   <br />
                                                  </div>
                                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div id="user_dialog" title="Add Data">
                                                
                                                   <div class="form-group">
                                                    <label>Upload By</label>
                                                    <input type="text" name="upload_by"  placeholder={{ Auth::user()->username }} id="upload_by" class="form-control" />
                                                    <span id="error_first_name" class="text-danger"></span>
                                                   </div>
                                                   <div class="form-group">
                                                    <label>Upload Time</label>
                                                    <input type="text" name="upload_time" id="upload_time" class="form-control" />
                                                    <span id="error_last_name" class="text-danger"></span>
                                                   </div>
                                                   <div class="form-group">
                                                        <label>Type Document</label>
                                                        <input type="text" name="type_document" id="type_document" class="form-control" />
                                                        <span id="error_last_name" class="text-danger"></span>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                            <label>Document Name</label>
                                                            <input type="file" name="document_name" id="document_name" class="form-control" />
                                                            <span id="error_last_name" class="text-danger"></span>
                                                    </div>
                                              </form>
                                                   <div class="form-group" align="center">
                                                    <input type="hidden" name="row_id" id="hidden_row_id" />
                                                    <button type="button" name="save" id="save" class="btn btn-info">Save</button>
                                                   </div>
                                                  </div>
                                                  <div id="action_alert" title="Action">
                                                
                                                  </div>
                                                  <div align="right" style="margin-bottom:5px;">
                                                        <button type="button" name="add" id="add" class="btn btn-success btn-xs">ADD MORE DOCUMENT</button>
                                                </div>
                                                <div class="form-group">
                                                        <button class="btn btn-success upload-image" type="submit">Kirim</button>
                                                </div>
                            </div>
                          
                        </form>
                        </div>
                 
                    </div>
                </div>
            
            </div>
        </section>
    </div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
  <script>

    $("body").on("click",".upload-image",function(e){
      $(this).parents("form").ajaxForm(options);
    });
  
  
    var options = { 
      complete: function(response) 
      {
          if($.isEmptyObject(response.responseJSON.error)){
            //   var sel = $("input[name='hidden_upload_by']").attr('value');
            $("input[name='hidden_upload_by']").attr('value');
            $("input[name='hidden_upload_time']").attr('value');
            $("input[name='hidden_type_document']").attr('value');
            //   $("input[name='hidden_upload_by']").val('');
            //   $("input[name='hidden_upload_time']").val('');
            //   $("input[name='hidden_type_document']").val('');
            //   alert(sel)
              alert('Image Upload Successfully.');
          }else{
              printErrorMsg(response.responseJSON.error);
          }
      }
    };
  
  
    function printErrorMsg (msg) {
      $(".print-error-msg").find("ul").html('');
      $(".print-error-msg").css('display','block');
      $.each( msg, function( key, value ) {
          $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
      });
    }
  </script>
<script>  
        
        $(document).ready(function(){
       

});
        var d = new Date();

        var month = d.getMonth()+1;
        var day = d.getDate();

        var output = ((''+day).length<2 ? '0' : '') + day + '-' + ((''+month).length<2 ? '0' : '') + month  + '-' +  d.getFullYear() ;
         var count = 0;
        
         $('#user_dialog').dialog({
          autoOpen:false,
          width:400
         });
        
         $('#add').click(function(){
          $('#user_dialog').dialog('option', 'title', 'Add Data');
          $('#upload_by').val('').attr("disabled",'disabled').attr("placeholder",'{{ Auth::user()->username }}');;
          $('#upload_time').val('').attr("disabled",'disabled').attr("placeholder",output);
          $('#type_document').val('');
          $('#document_name').val('');
          $('#error_upload_by').text('');
          $('#error_upload_time').text('');
          $('#error_type_document').text('');
          $('#error_document_name').text('');
          $('#upload_by').css('border-color', '');
          $('#upload_time').css('border-color', '');
          $('#type_document').css('border-color', '');
          $('#document_name').css('border-color', '');
          $('#save').text('Save');
          $('#user_dialog').dialog('open');
         });
        
         $('#save').click(function(){
          var error_upload_by = '';
          var error_upload_time = '';
          var error_type_document = '';
          var error_document_name = '';
          var upload_by = '';
          var upload_time = '';
          var type_document = '';
          var document_name = '';
          var output = ((''+day).length<2 ? '0' : '') + day + '-' + ((''+month).length<2 ? '0' : '') + month  + '-' +  d.getFullYear() ;

          if($('#upload_by').attr("placeholder") == '')
          {
           error_upload_by = 'Upload By is required';
           $('#error_upload_by').text(error_upload_by);
           $('#upload_by').css('border-color', '#cc0000');
           upload_by = '';
          }
          else
          {
           error_upload_by = '';
           $('#error_upload_by').text(error_upload_by);
           $('#upload_by').css('border-color', '');
           upload_by = '{{ Auth::user()->username }}'
          }
          
          if($('#upload_time').attr("placeholder") == '')
          {
           error_upload_time = 'Upload Time is required';
           $('#error_upload_time').text(error_upload_time);
           $('#upload_time').css('border-color', '#cc0000');
           upload_time = '';
          }
          else
          {
           error_upload_time = '';
           $('#error_upload_time').text(error_upload_time);
           $('#upload_time').css('border-color', '');
           upload_time = output;
           //$('#upload_time').val();
          }
        // upload_time = output;
          if($('#type_document').val() == '')
          {
           error_type_document = 'Type Document is required';
           $('#error_type_document').text(error_type_document);
           $('#type_document').css('border-color', '#cc0000');
           type_document = '';
          }
          else
          {
           error_type_document = '';
           $('#error_type_document').text(error_type_document);
           $('#type_document').css('border-color', '');
           type_document = $('#type_document').val();
          }
          if($('#document_name').val() == '')
          {
           error_document_name = 'Document name is required';
           $('#error_document_name').text(error_document_name);
           $('#document_name').css('border-color', '#cc0000');
           document_name = '';
          }
          else
          {
           error_document_name = '';
           $('#error_document_name').text(error_document_name);
           $('#type_document_name').css('border-color', '');
           document_name = $('#document_name').val();
          }
          if(error_upload_by != '' || error_upload_time != ''|| error_type_document != ''|| error_document_name != '')
          {
           return false;
          }
          else
          {
           if($('#save').text() == 'Save')
           {
            // alert(user);
            count = count + 1;
            output = '<tr id="row_'+count+'">';
            output += '<td>'+upload_by+' <input type="hidden" name="hidden_upload_by" id="upload_by'+count+'" class="first_name" value="'+upload_by+'" /></td>';
            output += '<td>'+upload_time+' <input type="hidden" name="hidden_upload_time" id="upload_time'+count+'" value="'+upload_time+'" /></td>';
            output += '<td>'+type_document+' <input type="hidden" name="hidden_type_document" id="type_document'+count+'" value="'+type_document+'" /></td>';
            output += '<td>'+document_name+' <input type="hidden" name="hidden_document_name" id="document_name'+count+'" value="'+document_name+'" /></td>';
            // output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
            output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
            output += '</tr>';
            $('#user_data').append(output);
           }
           else
           {
            var row_id = $('#hidden_row_id').val();
            output = '<td>'+upload_by+' <input type="hidden" name="hidden_upload_by" id="upload_by'+row_id+'" class="upload_by" value="'+upload_by+'" /></td>';
            output += '<td>'+upload_time+' <input type="hidden" name="hidden_upload_time" id="upload_time'+row_id+'" value="'+upload_time+'" /></td>';
            output += '<td>'+type_document+' <input type="hidden" name="hidden_type_document" id="type_document'+row_id+'" value="'+type_document+'" /></td>';
            output += '<td>'+document_name+' <input type="hidden" name="hidden_document_name" id="document_name'+row_id+'" value="'+document_name+'" /></td>';
            // output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
            output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
            $('#row_'+row_id+'').html(output);
           }
        
           $('#user_dialog').dialog('close');
          }
         });
        
        //  $(document).on('click', '.view_details', function(){
        //   var row_id = $(this).attr("id");
        //   var upload_by = $('#upload_by'+row_id+'').val();
        //   var upload_time = $('#upload_time'+row_id+'').val();
        //   var type_document = $('#type_document'+row_id+'').val();
        //   var document_name = $('#document_name'+row_id+'').val();
        //   $('#upload_by').val(upload_by);
        //   $('#upload_time').val(upload_time);
        //   $('#type_document').val(type_document);
        //   $('#document_name').val(document_name);
        //   $('#save').text('Edit');
        //   $('#hidden_row_id').val(row_id);
        //   $('#user_dialog').dialog('option', 'title', 'Edit Data');
        //   $('#user_dialog').dialog('open');
        //  });
        
         $(document).on('click', '.remove_details', function(){
          var row_id = $(this).attr("id");
          if(confirm("Are you sure you want to remove this row data?"))
          {
           $('#row_'+row_id+'').remove();
          }
          else
          {
           return false;
          }
         });
        
         $('#action_alert').dialog({
          autoOpen:false
         });
        
         $('#user_form').on('submit', function(event){
          event.preventDefault();
          var count_data = 0;
          $('.first_name').each(function(){
           count_data = count_data + 1;
          });
          if(count_data > 0)
          {
           var form_data = $(this).serialize();
           $.ajax({
            url:"insert.php",
            method:"POST",
            data:form_data,
            success:function(data)
            {
             $('#user_data').find("tr:gt(0)").remove();
             $('#action_alert').html('<p>Data Inserted Successfully</p>');
             $('#action_alert').dialog('open');
            }
           })
          }
          else
          {
           $('#action_alert').html('<p>Please Add atleast one data</p>');
           $('#action_alert').dialog('open');
          }
         });
         
      
        </script>
@endsection