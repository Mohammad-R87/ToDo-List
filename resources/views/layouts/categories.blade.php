@extends('panel')
@section('content')
    <section class="bg-light" style="width: 78%">
        <div style="padding: 33px 30px 15px 30px">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
            <form action="{{ route('storecategories') }}" method="POST">
                @csrf
                <div class="form-group d-flex">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="New Category..."
                        name="name">
                    <button type="submit" class="btn btn-info">Add</button>
                </div>
            </form>
            <div class="limiter mt-3">
                <div class="container-table100">
                    <div class="wrap-table100">
                        <div class="table100">
                            <table>
                                <thead>
                                    <tr class="table100-head">
                                        <th class="column1">ID</th>
                                        <th class="column2">Name</th>
                                        <th class="column3">Created</th>
                                        <th class="column3">Updated</th>
                                        <th class="column4">Edit</th>
                                        <th class="column5">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $list)
                                        <tr class="data-row">
                                            <td class="column1 iteration">{{ $list->id }}</td>
                                            <td class="column2 name">{{ $list->name }}</td>
                                            <td class="column3">{{ $list->created_at }}</td>
                                            <td class="column3">{{ $list->updated_at }}</td>
                                            <td class="column4">
                                                <button class="btn btn-info" id="edit-item"
                                                    data-item-id="{{ $list->id }}"><i class="far fa-edit"></i>
                                                    Edit</button>
                                            </td>
                                            <td class="column5"><a href="/categories/delete/{{ $list->id }}"
                                                    onclick="return confirm('Are you sure to remove <{{ $list->name }}> category?')"
                                                    class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">  <span aria-hidden="true">&times;</span></button>
                            </div>
                        <div class="modal-body">
                            <form action="{{ route('editcategories') }}" method="POST" id="edit-form" class="form-horizontal">
                                @csrf
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <!-- name -->
                                        <div class="form-group">
                                            <label class="col-form-label" for="modal-input-name">Edit the category
                                                name</label>
                                            <input type="text" name="name" class="form-control"
                                                id="modal-input-name" required autofocus>
                                            <input type="hidden" name="id" class="form-control"
                                                id="modal-input-id">
                                        </div>
                                        <!-- /name -->
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"
                                aria-label="Close">Close</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
