@extends('adminlte::page')

@section('title', 'Admin Credit Debit')

@section('content_header')
    <h1>Admin Credit Debit</h1>
@stop
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0 mt-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin Debit Credit</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Admin Credit Debit</h3>
                </div>

                <div class="card-body">
                    <div class="row input-daterange mb-4">
                        <div class="col-md-4 mt-2">
                            <div class="form-group">
                                <label for="game_name">Select User</label>
                                <select class="form-control select2 select2-hidden-accessible select-2-search" style="width: 100%" name="user_id" id="user_id">
                                    <option value="">--- Select User ---</option>
                                    @if($users)
                                    @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="form-group">
                                <label for="game_name">Type</label>
                                <select class="form-control" name="type" id="type">
                                    <option value="">--- Select Type ---</option>
                                    <option value="credit">Credit</option>
                                    <option value="withdrawal">Debit</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row input-daterange mb-4">
                        <div class="col-md-4 mt-2">
                            <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
                        </div>
                        <div class="col-md-4 mt-2">
                            <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
                        </div>
                        <div class="col-md-4 mt-2">
                            <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                            <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                        </div>
                    </div>

                    <table class="table table-bordered users-datatable w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>User</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<style type="text/css">
    .select2-container .select2-selection--single {
         height: 37px !important; 
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        margin-top: 4px !important;
    }
</style>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/> -->
<!-- <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet"> -->
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
  $(function () {

    $('.select-2-search').select2();

    $('.input-daterange').datepicker({
        todayBtn:'linked',
        format:'yyyy-mm-dd',
        autoclose:true
    });

    load_data();

    function load_data(from_date = '', to_date = '', user_id = '', type = '') {
        var table = $('.users-datatable').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: {
                url: "{{ url('admin/wallet/admin-debit-credit') }}",
                data: {from_date:from_date, to_date:to_date, user_id:user_id, type:type}
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'created_at', name: 'created_at'},
                {data: 'user.name', name: 'user.name'},
                {data: 'type', name: 'type'},
                {data: 'amount', name: 'amount'},
                {data: 'status', name: 'status'},
                {data: 'remark', name: 'remark'},
                // {
                //     data: 'action', 
                //     name: 'action', 
                //     orderable: true, 
                //     searchable: true
                // },
            ],
            'columnDefs': [
                 {
                    'targets': 3,
                    'createdCell':  function (td, cellData, rowData, row, col) {
                       $(td).attr('id', 'status-'+rowData.id); 
                    }
                 }
              ]
        });
    }
    

    $('#filter').click(function(){
        var from_date = $('#from_date').val();
        var to_date = $('#to_date').val();
        var user_id = $('#user_id').val();
        var type = $('#type').val();

        if(from_date != '' &&  to_date != ''){
            // table.ajax.reload(null, false);
            $('.users-datatable').DataTable().destroy();
            load_data(from_date, to_date, user_id, type);
        } else{
            alert('Both Date is required');
        }

    });

    $('#refresh').click(function(){
        $('#from_date').val('');
        $('#to_date').val('');
        $('#user_id').val();
        $('#type').val();
        $('.users-datatable').DataTable().destroy();
        load_data();
    });

    changeStatus = function (id, status) {

        if(status == 1){status="approved";}else{status="cancelled";}
        // console.log(status);
        
        let text = "Are you sure?";
        if (confirm(text) == true) {
            $.ajax({
                type: "POST",
                url: "{{ route('update.withdrawal.status') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id,
                    "status": status
                },
                success: function(data){
                    if (data.success == true) {
                        $("#status-"+id).text(data.status);
                        toastr.success("Status changed successfully");
                    }
                }
            });
        }
    }
    
  });
</script>
@stop