@extends('dashboard')

@section('content')
<div class="card mt-3 ml-3 mr-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Selamat Datang,</h6>
    </div>
    <div class="card-body">
        <p><b class="text-uppercase ">{{ Auth::user()->name }},</b>
            <br>Kamu login sebagai seorang 
            @can('isAdmin')
            <span class="btn btn-success">Admin</span>
            @else
            <span class="btn btn-success">User</span>
            @endcan
        </p>
    </div>
</div>
@endsection
