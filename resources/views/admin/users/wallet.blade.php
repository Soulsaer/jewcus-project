@extends('adminlte::page')

@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0 mt-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{URL::to('/admin/users')}}">Customers</a></li>
            <!-- <li class="breadcrumb-item active"><a href="{{URL::to('/admin/user/'.$user->id.'/edit')}}">{{ $user->name }}</a></li> -->
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Wallet</a></li>
        </ol>
    </div>
</div>
<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                    <div class="card-tools">
                        <span class="text-success"><b>Total Balance: </b><b id="total_balance">{{ $user->wallet_balance }}</b></span>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{ $user->id }}">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₹</span>
                                </div>
                                <input type="number" class="form-control" name="number" id="number">
                                <div class="input-group-append">
                                    <button type="button" id="add" class="btn btn-success">Add</button>
                                    <button type="button" id="subtract" class="btn btn-danger">Deduct</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <h3>Transactions</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Transaction Id</th>
                                        <th>Amount</th>
                                        <th style="width: 40px">Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $page = request()->get('page');
                                        $page = isset($page) ? (int)$page:1;
                                        $i = 1;
                                    @endphp
                                    @if ($transactions)
                                    @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ ($page-1)*10+$i }}</td>
                                        <td>{{ $transaction->id }}</td>
                                        <td>
                                            {{ $transaction->amount }}
                                        </td>
                                        <td>
                                            {{ $transaction->type }}
                                        </td>
                                    </tr>
                                    @php $i++; @endphp
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            {{ $transactions->links() }}
                        </div>
                    </div>
                </div>

                <div class="card-footer clearfix">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#add, #subtract").click(function(event) {
            
            var user_id = $("#user_id").val();
            var number = $("#number").val();
            var type = $(this).attr('id');
            console.log(type);

            $.ajax({
                type: "POST",
                url: "{{ route('update.wallet') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "user_id": user_id,
                    "number": number,
                    "type": type
                },
                success: function(data){
                    if (data.success == true) {
                        $("#total_balance").text(data.wallet_balance);
                        toastr.success("Processed successfully");
                    }
                }
            });
        });
    });
</script>
@stop
