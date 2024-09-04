@extends('adminlte::page')

@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0 mt-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
        </ol>
    </div>
</div>
<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th style="width: 40px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $page = request()->get('page');
                                $page = isset($page) ? (int)$page:1;
                                $i = 1;
                            @endphp
                            @if ($users)
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ ($page-1)*10+$i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                            @php $i++; @endphp
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="card-footer clearfix">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
@endsection
