@extends('index')
@section('title', 'Categories')
@section('content')
    <div class="section-header">
        <h1>Categories</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="/categories">Categories</a></div>
            <div class="breadcrumb-item">All Categories</div>
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
        <div class="form-group">
            <form action="{{ route('createcategories') }}" method="POST" class="d-flex">
                @csrf
                <input type="text" class="form-control" name="name" placeholder="New Category...">
                <button type="submit" class="btn btn-icon btn-lg btn-success">
                    <i class="fas fa-check"></i></a>
            </form>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>List Categories</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ListCategories as $column)
                                <tr class="data-row">
                                    <td class="iteration">{{ $column->id }}</td>
                                    <td class="name">{{ $column->name }}</td>
                                    <td>{{ $column->created_at }}</td>
                                    <td>{{ $column->updated_at }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-action mr-1" id="edit-item"
                                            data-item-id="{{ $column->id }}" data-toggle="tooltip" title="Edit"><i
                                                class="fas fa-pencil-alt"></i>
                                        </button>
                                        <a href="/categories/delete/{{ $column->id }}" class="btn btn-danger btn-action"
                                            data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ route('editcategories') }}" method="POST" id="edit-form" class="form-horizontal">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="modal-input-name" required
                                    autofocus>
                                <input type="hidden" name="id" class="form-control" id="modal-input-id">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                aria-label="Close">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
