@extends('layouts.master')
@section("headerName", "UMKM Management")
@section("pageName", "UMKM Management")
@section('content')
<div class="container">
    <div class="row g-5 align-items-center">
        <form action="/umkm" method="GET" class="col-auto ms-auto">
            <div class="input-group">
                <input type="search" name ="search" value="{{ request()->search }}" placeholder="Search" class="form-control" aria-labelledby="passwordHelpInline">
                <button class="btn btn-secondary" type="submit">
                    Go
                </button>
            </div>
        </form>
    </div>
    <div>
        <div class="col-md-15">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">UMKM Account</h3>
                    <div class="card-tools">
                        <small class="float-center">See Detail</small>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>UMKM Name</th>
                                    <th>Owner</th>
                                    <th>Address</th>
                                    <th>Registration Date</th>
                                    <th>Phone</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach($umkm as $t)
                            <tbody>
                                <tr>
                                    <td>{{$t->umkm_name}}</td>
                                    <td>{{$t->umkm_owner}}</td>
                                    <td>{{$t->umkm_address}}</td>
                                    <td>{{$t->join_at}}</td>
                                    <td>{{$t->umkm_phone}}</td>
                                    <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <a href="/umkm/{{$t->id}}/detail" class="btn btn-warning plus float-right">See Detail</a>
                                        </div>
                                    </td>
                                <tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                      