@extends('layouts.master')
@section("headerName", "User Account Detail")
@section("pageName", "User Account Detail")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">User Detail Information</h3>
                <div class="card-tools">
                    <small class="float-center">Registration Date: {{$customer->email_verified_at}}</small>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i> 
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputUserame">Username</label>
                    <input type="text" id="inputUserame" class="form-control" value="{{$customer->cust_username}}">
                </div>
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" id="inputName" class="form-control" value="{{$customer->cust_name}}">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" id="inputAddress" class="form-control" value="{{$customer->cust_address}}">
                </div>
                <div class="form-group">
                    <label for="inputPhone">Phone Number</label>
                    <input type="text" id="inputPhone" class="form-control" value="{{$customer->cust_phone}}">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="text" id="inputPassword" class="form-control" value="{{$customer->cust_password}}">
                </div>
                <div class="form-group">
                    <label for="inputSocialMedia">Social Media</label>
                    <input type="text" id="inputSocialMedia" class="form-control" value=" ">
                </div>
            </div>
            <a class="btn btn-success mt3" href="/customer">Kembali</a>
        </div>
    </div>
</div>
@endsection
