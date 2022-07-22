@extends('index')
@section('title', 'Dashboard')
@section('content')
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="alert alert-light alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                " {{ 'Welcome user' }} {{ __(Auth::user()->name) }} "
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>All Tasks</h4>
                    </div>
                    <div class="card-body">
                        {{ $AllTasks }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-th"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>All Categories</h4>
                    </div>
                    <div class="card-body">
                        {{ $AllCategories }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Done Tasks</h4>
                    </div>
                    <div class="card-body">
                        {{ $DoneTasks }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-hourglass-half"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Undone Tasks</h4>
                    </div>
                    <div class="card-body">
                        {{ $UnDoneTasks }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
