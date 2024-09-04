@extends('adminlte::page')

@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0 mt-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{URL::to('/admin/users')}}">Users</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $user->id }}</a></li>
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
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/user/'.$user->id.'/edit') }}"><i class="fas fa-edit"></i> Edit</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('user.wallet', ['id' => $user->id]) }}"><i class="fas fa-wallet"></i> Wallet</a>
                    </div>
                </div>

                <div class="card-body">
                    
                </div>

                <div class="card-footer clearfix">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
@endsection
