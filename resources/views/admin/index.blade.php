@extends('layouts.main-admin')

@section('admin-content')
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
        <div class="x_title">
            <h2>{{$title}}</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content text-center">
            <h4>Welcome to Monitoring Admin Page Ruang Internasional</h4>

            <div class="col-4 offset-4 py-4">
                <img src="{{ asset('assets/user/images/logo/Ruang Internasional.png') }}" class="img-circle img-fluid" alt="">
            </div>
        </div>
        </div>
    </div>
@endsection
