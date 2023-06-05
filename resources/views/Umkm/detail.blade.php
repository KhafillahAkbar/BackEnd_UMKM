@extends('layouts.master')
@section("headerName", "UMKM Account Detail")
@section("pageName", "UMKM Account Detail")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">UMKM Detail Information</h3>
                <div class="card-tools">
                    <small class="float-center">Registration Date: {{$umkm->join_at}}</small>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i> 
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputUserame">UMKM Name</label>
                    <input type="text" id="inputUserame" class="form-control" value="{{$umkm->umkm_name}}">
                </div>
                <div class="form-group">
                    <label for="inputName">Owner</label>
                    <input type="text" id="inputName" class="form-control" value="{{$umkm->umkm_owner}}">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" id="inputAddress" class="form-control" value="{{$umkm->umkm_address}}">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input type="text" id="inputAddress" class="form-control" value="{{$umkm->umkm_email}}">
                </div>
                <div class="form-group">
                    <label for="inputPhone">Phone Number</label>
                    <input type="text" id="inputPhone" class="form-control" value="{{$umkm->umkm_phone}}">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Description</label>
                    <input type="text" id="inputPassword" class="form-control" value="{{$umkm->umkm_desc}}">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="text" id="inputPassword" class="form-control" value="{{$umkm->umkm_password}}">
                </div>
                <div class="form-group">
                    <label for="inputSocialMedia">Social Media</label>
                    <input type="text" id="inputSocialMedia" class="form-control" value=" ">
                </div>
            </div>
            <a class="btn btn-success mt3" href="/umkm">Kembali</a>
        </div>
    </div>
</div>
@endsection
