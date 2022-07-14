@extends('index')
@section('title', 'Tasks')
@section('content')
    <div class="section-header">
        <h1>Tasks</h1>
        <div class="section-header-button">
            <a href="/add/tasks" class="btn btn-primary">Add New</a>
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="/tasks">Tasks</a></div>
            <div class="breadcrumb-item">All Tasks</div>
        </div>
    </div>
    <div class="section-body">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ $error }}
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Sortable Table</h4>
                        <div class="card-header-action">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped" id="sortable-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <i class="fas fa-th"></i>
                                        </th>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Done</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="sort-handler">
                                                <i class="fas fa-th"></i>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>jgjerhg</td>
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success">Completed</div>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-action mr-1" id="edit-item" data-item-id=""
                                                data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <a href="/tasks/delete/" class="btn btn-danger btn-action mr-1"
                                                data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></a>
                                            <button class="btn btn-info btn-action mr-1" id="edit-item" data-item-id=""
                                                data-toggle="tooltip" title="Info"><i class="fas fa-info-circle"></i>
                                            </button>
                                            <a href="/tasks/done/" class="btn btn-success btn-action"
                                                data-toggle="tooltip" title="Done"><i class="fas fa-check"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
