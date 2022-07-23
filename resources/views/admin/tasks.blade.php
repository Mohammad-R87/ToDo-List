@extends('layouts.index-admin')
@section('title', 'Tasks')
@section('content')
    <div class="section-header">
        <h1>Tasks</h1>
        <div class="section-header-button">
            <a href="/tasks/store" class="btn btn-primary">Add New</a>
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
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
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session()->get('success') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List Tasks</h4>
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
                                    @foreach ($ListTasks as $column)
                                        <tr class="data-row">
                                            <td>
                                                <div class="sort-handler">
                                                    <i class="fas fa-th"></i>
                                                </div>
                                            </td>
                                            <td class="iteration id">{{ $column->id }}</td>
                                            <td class="name">{{ $column->title }}</td>
                                            <td class="description hidden">{{ $column->description }}</td>
                                            <td class="created hidden">{{ $column->created_at }}</td>
                                            <td class="updated hidden">{{ $column->updated_at }}</td>
                                            <td class="done">{{ $column->done_at }}</td>
                                            <td class="category"><span
                                                    class="badge badge-warning">{{ $column->category->name }}</span></td>
                                            <td>
                                                <button class="btn btn-primary btn-action mr-1" id="edit-item"
                                                    data-item-id="{{ $column->id }}" data-toggle="tooltip"
                                                    title="Edit"><i class="fas fa-pencil-alt"></i>
                                                </button>
                                                <a href="/tasks/delete/{{ $column->id }}"
                                                    class="btn btn-danger btn-action mr-1" data-toggle="tooltip"
                                                    title="Delete"><i class="fas fa-trash"></i></a>
                                                <button class="btn btn-info btn-action mr-1" id="info-item" data-item-id=""
                                                    data-toggle="tooltip" title="Info"><i class="fas fa-info-circle"></i>
                                                </button>
                                                <a href="/tasks/done/{{ $column->id }}"
                                                    class="btn btn-success btn-action mr-1" data-toggle="tooltip"
                                                    title="Done"><i class="fas fa-check"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- -------------------------------------------- Start Modal Edit  -------------------------------------------- --}}
        <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Task</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ route('edittasks') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row mb-3">
                                    <div class="col-sm-12 col-md-12">
                                        <input type="hidden" name="id" class="form-control" id="modal-input-id">
                                        <input type="text" class="form-control" name="title" id="modal-input-name">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-sm-12 col-md-12">
                                        <select class="form-control selectric" name="category">
                                            @foreach ($ListCategories as $column)
                                                <option value="{{ $column->id }}">{{ $column->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12">
                                        <textarea class="form-control" name="description" id="modal-input-description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                    aria-label="Close">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- -------------------------------------------- End Modal Edit  -------------------------------------------- --}}
        {{-- -------------------------------------------- Start Modal Info  -------------------------------------------- --}}
        <div class="modal fade" id="ModalInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Task</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group row mb-2">
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" class="form-control" id="info-id" disabled>
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" class="form-control" id="info-name" disabled>
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" class="form-control" id="info-category" disabled>
                                </div>
                            </div>
                            <div class="form-group row mb-2 ">
                                <div class="col-sm-12 col-md-12">
                                    <textarea class="form-control" id="info-description" disabled></textarea>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="far fa-calendar-plus"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control phone-number" id="info-created" disabled>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-pencil-alt"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control phone-number" id="info-updated" disabled>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="far fa-calendar-check"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control phone-number" id="info-done" disabled>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"
                                aria-label="Close">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- -------------------------------------------- End Modal Info  -------------------------------------------- --}}
    @endsection
