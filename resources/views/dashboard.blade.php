@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text">1,250 Active Users</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Reports</h5>
                        <p class="card-text">150 New Reports</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Revenue</h5>
                        <p class="card-text">$12,500 This Month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
